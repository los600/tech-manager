<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {  
        $admin = User::factory([
        'email' => 'admin@admin.com',
        'name' => 'admin',
        'isAdmin' => true
        ])->create();

        $user = User::factory([ 
        'email' => 'user@user.com',
        'name' => 'user',
        
        ])->create();

         Events::factory()->create(
            ["isImportant" => true,
            "image"=>"https://cdn2.unrealengine.com/17br-comp-samsung-galaxycup2-0-newsheader-1900x600-1900x600-72b148107260.jpg",
            ]
        );
        Events::factory()->create(
            ["isImportant" => true,
            "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQni3jJ1TuRRcHAhPQdtHmbaTJ-fMzYyTsT9w&usqp=CAU",]
        );
        Events::factory()->create(
            ["isImportant" => true,
            "image"=>"https://www.adslzone.net/app/uploads-adslzone.net/2019/04/borrar-fondo-imagen.jpg",]
        );

        Events::factory()->create(
            ["isImportant" => true,
            "image"=>"https://mott.pe/noticias/wp-content/uploads/2019/03/los-50-paisajes-maravillosos-del-mundo-para-tomar-fotos.jpg",]
        );

        Events::factory()->create(
            ["image" => "https://ichef.bbci.co.uk/news/640/cpsprodpb/16E0B/production/_117670739_nfts2.jpg"]
        );
        Events::factory()->create(
            ["image" => "https://th.bing.com/th/id/OIP.rsq6Q0bnHJB-QRaolzy0_QHaE7?pid=ImgDet&rs=1"]
        );
       Events::factory()->create(
           ["image" => "https://blockgeeks.com/wp-content/uploads/2016/09/blockchain-use-cases.png"]
       );
       Events::factory()->create(
            ["image" => "https://www.lavanguardia.com/files/image_449_220/uploads/2021/03/18/60539e3985667.jpeg"]
        );*/
    
    } 
}
