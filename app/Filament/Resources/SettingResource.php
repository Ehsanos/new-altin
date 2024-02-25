<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Tabs;

use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use RalphJSmit\Filament\SEO\SEO;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'الاعدادات';
    protected static ?string $pluralModelLabel = 'الاعدادات';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make('وسائل التواصل')->schema([
                    Forms\Components\Card::make()->schema([
                        SpatieMediaLibraryFileUpload::make('img')->collection('setting')->label('اللوغو '),

                        Forms\Components\TextInput::make('phone')->nullable()->tel(),
                        Forms\Components\TextInput::make('phone2')->tel(),
                        Forms\Components\TextInput::make('phone3')->nullable()->tel(),

                        Forms\Components\TextInput::make('whatsapp1')->nullable()->tel(),
                        Forms\Components\TextInput::make('whatsapp2')->nullable()->tel(),
                        Forms\Components\TextInput::make('whatsapp3')->nullable()->tel(),

                        Forms\Components\TextInput::make('facebook')->nullable(),
                        Forms\Components\TextInput::make('twitter')->nullable(),
                        Forms\Components\TextInput::make('email')->nullable()->email(),
//                        Forms\Components\TextInput::make('email2')->nullable()->email(),
//                        Forms\Components\TextInput::make('email3')->nullable()->email(),
                        Forms\Components\TextInput::make('youtube')->nullable(),
//                        Forms\Components\TextInput::make('chat_bot')->nullable(),
                        Forms\Components\TextInput::make('map')->nullable(),
                        Forms\Components\TextInput::make('instagram')->nullable(),


                    ])->columns(4),

                ]),



                Forms\Components\Section::make('معلومات التواصل')->schema([


                    Forms\Components\Tabs::make('Heading')
                        ->tabs([
                            Tabs\Tab::make('AR')->schema([

                                Forms\Components\Card::make()->schema([
//                                    Forms\Components\TextInput::make('name_ar')->nullable()->label('اسم الموقع عربي'),
                                   TinyEditor::make('address')->nullable()->label('معلومات التواصل عربي'),
                                    TinyEditor::make('description')->nullable()->label('سياسية الخصوصية بالعربي'),
                                    TinyEditor::make('about')->nullable()->label('تعريف بالشركة بالعربي'),
                                ]),


                            ])
                            ,

                            Tabs\Tab::make('EN')
                                ->schema([
                                    Forms\Components\Card::make()->schema([

//                                        Forms\Components\TextInput::make('name_en')->nullable()->label('اسم الموقع EN'),
                                       TinyEditor::make('address_en')->nullable()->label('معلومات التواصل EN'),
                                        TinyEditor::make('description_en')->nullable()->label('سياسة الخصوصية EN'),
                                        TinyEditor::make('about_en')->nullable()->label('حول الشركة EN'),

                                    ]),

                                ]),
                            Tabs\Tab::make('TR')
                                ->schema([
                                    Forms\Components\Card::make()->schema([
//                                        Forms\Components\TextInput::make('name_tr')->nullable()->label('اسم الموقع TR'),
                                       TinyEditor::make('address_tr')->nullable()->label('معلومات التواصل TR'),
                                   TinyEditor::make('description_tr')->nullable()->label('سياسة الخصوصية TR'),
                                   TinyEditor::make('about_tr')->nullable()->label('حول الشركة  TR'),

                                    ]),

                                ]),

//                            Tabs\Tab::make('ES')
//                                ->schema([
//                                    Forms\Components\Card::make()->schema([
//
//
//                                        Forms\Components\TextInput::make('name_es')->nullable()->label('اسم الموقع ES'),
//                                        Forms\Components\Textarea::make('address_es')->nullable()->label('عنوان الموقع ES'),
//                                        Forms\Components\Textarea::make('description_es')->nullable()->label('وصف الموقع ES'),
//
//
//                                    ])->columns(3),
//
//                                ]),
//
//                            Tabs\Tab::make('DU')->schema([
//                                Forms\Components\Card::make()->schema([
//
//                                    Forms\Components\TextInput::make('name_du')->nullable()->label('اسم الموقع DU'),
//                                    Forms\Components\Textarea::make('address_du')->nullable()->label('عنوان الموقع DU'),
//                                    Forms\Components\Textarea::make('description_du')->nullable()->label('وصف الموقع DU'),
//
//
//                                ])->columns(3),
//
//                            ])
                        ])


                ]),
                Forms\Components\Card::make()->schema([
                    SEO::make()->label('كلمات مساعدة لمحركات البحث')
                ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')->label('البريد الالكتروني'),
                Tables\Columns\TextColumn::make('phone')->label('رقم الهاتف'),
                Tables\Columns\TextColumn::make('facebook')->label('صفحة الفيس بوك'),
                Tables\Columns\TextColumn::make('instagram')->label('صفحة انستغرام'),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('setting')->label(' اللوغو'),

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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
