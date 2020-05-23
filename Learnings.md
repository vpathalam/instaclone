Learnings:

Laravel uses MVC architecture
PHP Artisan can fast create a model, controller, view
When creating a model with 'php artisan make:model modelName -m" the -m option is used to add a migration
Migrations are used in SQLite databases to represent somethign in the database ex. creating a profile table

Tinker:
'php artisan tinker' can interact with a php application via CLI one php line at a time
$variable->save() will save variable changes to the database, doesn't work with nested attributes
$variable->push() will push all dirty changes to the database, works with nested attributes

/app directory contains model related files
/app/Http/Controllers contains controller related files
/resources/views contains view related .blade.php files
/database/migrations contains the SQLite migrations tables

In Laravel, {{$variable->attribute}} can be used to echo a variable. PHP Alt. <?=$variable?>

SQLite:
->nullable attribute means not required table attribute
Add an index for any foreign key in the table
php artisan migrate to confirm/migrate any changes made

Model:
If model files are in the same namespace, they don't have to have relative path references
$this->hasOne/hasMany/belongsTo(className::class) can link two models/tables together to create a relationship

Controller:
Class::findOrFail is an alt to ::find that fails gracefully (returns 404 if not found, doesn't break application)

To Create a Feature:

1. CLI: 'php artisan make:model featureName -m'
2. Navigate to /database/migrations/featureMigration and add $table attributes
3. CLI: 'php migrate'
4. Update other class.php rules in /app to support belongsTo/hasOne/hasMany relationship with new feature

