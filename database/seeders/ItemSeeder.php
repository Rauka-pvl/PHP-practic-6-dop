<?php
namespace Database\Seeders;
use App\Models\Item;
use Illuminate\Database\Seeder;
class ItemSeeder extends Seeder
{
    public function run(): void {
        foreach ([['USB-кабель','device',5,12500],['Чехол','accessory',3,7500],['Адаптер','device',2,15000]] as [$title,$category,$quantity,$price]) {
            Item::firstOrCreate(['title'=>$title],['category'=>$category,'quantity'=>$quantity,'price_minor'=>$price]);
        }
    }
}
