<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicationResource\Pages;
use App\Filament\Resources\ApplicationResource\RelationManagers;
use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('View Application')->schema([
                    TextInput::make('firstname')->required()->disabledOn('edit'),
                    TextInput::make('middlename')->required()->disabledOn('edit'),
                    TextInput::make('lastname')->required()->disabledOn('edit'),
                    TextInput::make('email')->required()->email()->disabledOn('edit'),
                    TextInput::make('phone')->required(),
                    Select::make('gender')->options([
                        'male'=>'Male',
                        'female'=>'Female'
                    ])->required()->disabledOn('edit'),
                    DatePicker::make('dob')->required()->label('Date of Birth')->disabledOn('edit'),
                    Select::make('chapter_id')->relationship('chapter','name'),
                    Select::make('member_type_id')->relationship('member_type','type')->required(),
                    Toggle::make('status')->label('Review Completed'),
                    Repeater::make('answers')->schema([
                        TextInput::make('monthly_outreach')->label('I personally do active outreach monthly (not just church work):')->disabledOn('edit'),
                        TextInput::make('outreach')->label('I have recent personal outreach experiences to share:')->disabledOn('edit'),
                        RichEditor::make('outreach_experience')->label('My Outreach Experience:'),
                        TextInput::make('christian_standard')->label('I strive to live out our high Christian standard as taught by the Bible and SOP:')->disabledOn('edit'),
                        TextInput::make('graduate')->label('I am a gradaute:')->disabledOn('edit'),
                        TextInput::make('professional')->label('I am a professional:')->disabledOn('edit'),
                        TextInput::make('attended_missions')->label('I have attended an ALIVE mission at least once:')->disabledOn('edit'),
                        TextInput::make('good_standing_adventist')->label('I am an adventist in good standing with my church:')->disabledOn('edit'),
                        TextInput::make('have_supported')->label('I supported the ALIVE-Nigeria ministry in the past year with at least:')->disabledOn('edit'),
                        TextInput::make('will_support')->label('I desire to support ALIVE-Nigeria ministry with at least monthly:')->disabledOn('edit'),
                        TextInput::make('monthly_support')->label('Do you intend to support the ministry of ALIVE Nigeria on a monthly basis?')->disabledOn('edit'),
                        TextInput::make('monthly_amount')->label('Specify Amount you intend to Support Alive Nigeria with')->disabledOn('edit'),
                        TextInput::make('currency')->label('Specify the currency')->disabledOn('edit'),
                    ])->columnSpan(2)->columns(2)->disableItemCreation()
                    ->disableItemDeletion()
                    ->disableItemMovement()->label('Answers to Questions'),
                ])->columns(2)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firstname')->searchable(),
                TextColumn::make('middlename')->searchable(),
                TextColumn::make('lastname')->searchable(),
                TextColumn::make('gender')->getStateUsing(function($record){
                    return ucfirst($record->gender);
                })->sortable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone')->searchable(),
                TextColumn::make('chapter.name')->sortable()->searchable(),
                TextColumn::make('member_type.type')->sortable(),
                TextColumn::make('status')->getStateUsing(function($record){
                    if($record->status==0 || $record->status==null)
                    {
                        return "Pending Review ...";
                    }
                    else
                    {
                        return "Reviewed";
                    }
                })->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }
}
