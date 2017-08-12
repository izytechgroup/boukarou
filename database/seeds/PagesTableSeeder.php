<?php

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'title'     => "Qui sommes-nous ?",
            'slug'      => "qui-sommes-nous",
            'last_updated_by'   => 1,
            'content'   => "Le Boukarou est la matérialisation d’un écosystème dédié à l’innovation, à l’entrepreneuriat productif et contextuel. Notre philosophie est de donner la possibilité aux individus et aux communautés de découvrir, d’exprimer, d’exploiter leur capacité, créativité, talent, pour le bien-être des populations. D’où notre signature « vous êtes votre propre chance ».",
        ]);

        DB::table('pages')->insert([
            'title'     => "Offres",
            'slug'      => "offres",
            'last_updated_by'   => 1,
            'content'   => '<ul style="list-style-type: disc;">
<li><span style="color: #0000ff; font-size: 18px;"><em><strong>JEUNES POUSSES&nbsp;</strong></em></span>
<div class="col-sm-6 left">
<div class="text">Pour le Cameroun et pour toute l&rsquo;afrique centrale, la création de TPE/PME viables est vitale aujourd&rsquo;hui et demain pour au moins deux raisons fortes: Le manque d&rsquo;emploi : pour une population jeune en forte demande et un boom démographique qui va accentuer ce gap. Cela provoque une crise sociale très forte qui va s&rsquo;accentuer dans les années à venir si ce combat de l&rsquo;emploi n&rsquo;est pas mené et remporté.</div>
<div class="text">&nbsp;</div>
</div>
</li>
<li><span style="color: #0000ff; font-size: 18px;"><em><strong>CORPORATES</strong></em></span>
<div class="col-sm-6 left">
<div class="text">Pour le Cameroun et pour toute l&rsquo;afrique centrale, la création de TPE/PME viables est vitale aujourd&rsquo;hui et demain pour au moins deux raisons fortes: Le manque d&rsquo;emploi : pour une population jeune en forte demande et un boom démographique qui va accentuer ce gap. Cela provoque une crise sociale très forte qui va s&rsquo;accentuer dans les années à venir si ce combat de l&rsquo;emploi n&rsquo;est pas mené et remporté.</div>
</div>
<div class="col-sm-6 right">&nbsp;</div>
</li>
<li><span style="color: #0000ff; font-size: 18px;"><em><strong>GRAND PUBLIC</strong></em></span>
<div class="col-sm-6 left">
<div class="text">Pour le Cameroun et pour toute l&rsquo;afrique centrale, la création de TPE/PME viables est vitale aujourd&rsquo;hui et demain pour au moins deux raisons fortes: Le manque d&rsquo;emploi : pour une population jeune en forte demande et un boom démographique qui va accentuer ce gap. Cela provoque une crise sociale très forte qui va s&rsquo;accentuer dans les années à venir si ce combat de l&rsquo;emploi n&rsquo;est pas mené et remporté.</div>
</div>
<div class="col-sm-6 right">&nbsp;</div>
</li>
</ul>',
        ]);
    }
}
