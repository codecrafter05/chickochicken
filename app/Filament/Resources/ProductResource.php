<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    
    protected static ?string $navigationLabel = 'Products';
    
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                    ]),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('products')
                    ->disk('public')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->maxSize(2048)
                    ->helperText('Maximum file size: 2MB'),
                
                // Single Price Field (for products like sauces, drinks, salads)
                // NOTE: Use this field for products that don't need separate sandwich/meal prices
                // If 'price' is set, it will be displayed without labels
                // If 'sandwich_price' and/or 'meal_price' are set, they will be displayed with labels
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->step(0.001)
                    ->prefix('BHD')
                    ->placeholder('1.100')
                    ->helperText('Single price for products like sauces, drinks, salads. Leave empty if using sandwich/meal prices below.')
                    ->nullable(),
                
                // Dual Price Fields (for products with sandwich and meal options)
                Forms\Components\Section::make('Sandwich & Meal Prices')
                    ->description('Use these fields for products that have different prices for sandwich and meal options. Leave empty if using single price above.')
                    ->schema([
                        Forms\Components\TextInput::make('sandwich_price')
                            ->numeric()
                            ->step(0.001)
                            ->prefix('BHD')
                            ->placeholder('2.750')
                            ->helperText('Enter price like 2.750, 1.900, etc.')
                            ->nullable(),
                        Forms\Components\TextInput::make('meal_price')
                            ->numeric()
                            ->step(0.001)
                            ->prefix('BHD')
                            ->placeholder('3.500')
                            ->helperText('Enter price like 3.500, 2.750, etc.')
                            ->nullable(),
                    ])
                    ->collapsible(),
                Forms\Components\Toggle::make('is_active')
                    ->default(true)
                    ->label('Active'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->searchable()
                    ->sortable()
                    ->badge(),
                Tables\Columns\TextColumn::make('price')
                    ->money('BHD')
                    ->sortable()
                    ->label('Price')
                    ->default('—'),
                Tables\Columns\TextColumn::make('sandwich_price')
                    ->money('BHD')
                    ->sortable()
                    ->label('Sandwich Price')
                    ->default('—'),
                Tables\Columns\TextColumn::make('meal_price')
                    ->money('BHD')
                    ->sortable()
                    ->label('Meal Price')
                    ->default('—'),
                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->label('Order'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload(),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active')
                    ->placeholder('All')
                    ->trueLabel('Active only')
                    ->falseLabel('Inactive only'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('order')
            ->reorderable('order');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
