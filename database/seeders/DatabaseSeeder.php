<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Shipper;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SupplierSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            CustomerSeeder::class,
            EmployeeSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            ShipperSeeder::class,
        ]);
    }
}

class SupplierSeeder extends Seeder
{
    public function run()
    {
        Supplier::factory()->count(5)->create();
    }
}

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::factory()->count(10)->create();
    }
}

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::factory()->count(3)->create();
    }
}

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::factory()->count(5)->create();
    }
}

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Employee::factory()->count(5)->create();
    }
}

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::factory()->count(5)->create();
    }
}

class OrderDetailSeeder extends Seeder
{
    public function run()
    {
        OrderDetail::factory()->count(20)->create();
    }
}

class ShipperSeeder extends Seeder
{
    public function run()
    {
        Shipper::factory()->count(2)->create();
    }
}
