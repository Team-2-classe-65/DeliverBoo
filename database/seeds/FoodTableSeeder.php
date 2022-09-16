<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foods = [

            [
                "name" => "Spaghetti di riso saltati",
                "description" => "Gli spaghetti di riso saltati sono un piatto tipico cinese,La ricetta che vi proponiamo prevede l’utilizzo dei gamberetti, è possibile variare questa preparazione anche con l’utilizzo della carne di pollo o di maiale, a seconda della preferenza. Utilizzate della salsa di soia e del peperoncino piccante per completare la preparazione di questo piatto.",
                "price" => "10.00 €",
                "disponibility" => "true"
            ],
            [
                "name" => "Lasagne alla Bolognese",
                "description" => "Le lasagne alla bolognese sono un primo piatto tradizionale emiliano,Tre le preparazioni base necessarie alla realizzazione di questo piatto: la pasta fresca all'uovo agli spinaci, il ragù bolognese e la besciamella.",
                "price" => "8.00 €",
                "disponibility" => "true"
            ],
            [
                "name" => "Tempura",
                "description" => "una frittura di verdure o pesce realizzata con una pastella leggera a base di farina di riso",
                "price" => "5.00 €",
                "disponibility" => "true"
            ],
            [
                "name" => "Insalata Greca",
                "description" => "l’insalata greca, a base di pomodori, olive e cetrioli, molto diffusa soprattutto nel periodo estivo",
                "price" => "6.00 €",
                "disponibility" => "true"
            ],
            [
                "name" => "Cheese naan",
                "description" => "Il pane indiano per eccellenza. Questa è la ricetta classica, senza il ripieno cremoso di formaggio",
                "price" => "3.00 €",
                "disponibility" => "true"
            ],
            [
                "name" => "Paella",
                "description" => "La paella è un piatto tradizionale della cucina spagnola a base di riso, zafferano, verdure, carne o frutti di mare.",
                "price" => "12.00 €",
                "disponibility" => "true"
            ],
            [
                "name" => "Hamburger",
                "description" => "Fra i più noti piatti da fast food del mondo, è composto da un bun, un hamburger propriamente detto, salse e condimenti.Fra gli ingredienti addizionali che vengono usati per insaporire l'hamburger vi sono formaggio, lattuga, pomodoro, cipolla, sottaceti, pancetta, peperoncino, o salse come ketchup, senape e maionese.",
                "price" => "7.00 €",
                "disponibility" => "true"
            ],
            [
                "name" => "Tiramisù",
                "description" => "Il tiramisù classico è il dessert italiano per eccellenza, uno dei più golosi e conosciuti al mondo. Crema al mascarpone e savoiardi al caffè.",
                "price" => "4.00 €",
                "disponibility" => "true"
            ],
            [
                "name" => "Pizza Margherita",
                "description" => "La pizza è un prodotto gastronomico salato che consiste in un impasto a base di farina, acqua e lievito che viene spianato e condito tipicamente con pomodoro, mozzarella e altri ingredienti e cotto in un forno a legna.",
                "price" => "4.00 €",
                "disponibility" => "true"
            ]
        ];
    }
}
