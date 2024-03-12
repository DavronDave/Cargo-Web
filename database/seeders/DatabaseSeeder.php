<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LanguagesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(IncotermsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(CompanyContractsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);

        $this->call(InvoicesTableSeeder::class);
        $this->call(InvoiceProductsTableSeeder::class);
        $this->call(DriversTableSeeder::class);
        $this->call(SenderPeopleTableSeeder::class);
        $this->call(ReceiverPeopleTableSeeder::class);


        $this->call(ModuleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RolePermissionTableSeeder::class);
    }
}
