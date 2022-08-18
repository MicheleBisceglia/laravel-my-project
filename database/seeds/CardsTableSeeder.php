<?php
use App\Card;
use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $new_card = new Card();
                $new_card->name = 'Dybala';
                $new_card->ruolo = 'ST';
                $new_card->pac = '89 PAC';
                $new_card->sho = '88 SHO';
                $new_card->pas = '92 PAS';
                $new_card->dri = '94 DRI';
                $new_card->def = '45 DEF';
                $new_card->phy = '67 PHY';
                $new_card->save();
            }
      
    }
