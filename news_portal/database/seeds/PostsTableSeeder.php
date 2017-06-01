<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Откуда он появился?',
            'category_id' => 2,
            'user_id' => 1,
            'intro' => 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так.',
            'body' => 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. ',
        ]);
        DB::table('posts')->insert([
            'title' => 'Почему он используется?',
            'category_id' => 1,
            'user_id' => 1,
            'intro' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
        ]);
        DB::table('posts')->insert([
            'title' => 'Где его взять?',
            'category_id' => 3,
            'user_id' => 1,
            'intro' => 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. ',
            'body' => 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или "невозможных" слов. ',
        ]);
        DB::table('posts')->insert([
            'title' => 'Текст используемый с XVI века',
            'category_id' => 5,
            'user_id' => 1,
            'intro' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        ]);
        DB::table('posts')->insert([
            'title' => 'Английский перевод 1914 года, H. Rackham',
            'category_id' => 4,
            'user_id' => 1,
            'intro' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui',
            'body' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.',
        ]);
        DB::table('posts')->insert([
            'title' => 'Абзац 1.10.33 "de Finibus Bonorum et Malorum"',
            'category_id' => 4,
            'user_id' => 1,
            'intro' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,',
            'body' => 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.',
        ]);
        DB::table('posts')->insert([
            'title' => 'Kaj je Lorem Ipsum?',
            'category_id' => 3,
            'user_id' => 1,
            'intro' => 'Lorem Ipsum je slepi tekst, ki se uporablja pri razvoju tipografij in pri pripravi za tisk. ',
            'body' => 'Lorem Ipsum je slepi tekst, ki se uporablja pri razvoju tipografij in pri pripravi za tisk. Lorem Ipsum je v uporabi že več kot petsto let saj je to kombinacijo znakov neznani tiskar združil v vzorčno knjigo že v začetku 16. stoletja. To besedilo pa ni zgolj preživelo pet stoletij, temveč se je z malenkostnimi spremembami uspešno uveljavilo tudi v elektronskem namiznem založništvu. Na priljubljenosti je Lorem Ipsum pridobil v sedemdesetih letih prejšnjega stoletja, ko so na trg lansirali Letraset folije z Lorem Ipsum odstavki. V zadnjem času se Lorem Ipsum pojavlja tudi v priljubljenih programih za namizno založništvo kot je na primer Aldus PageMaker.',
        ]);
        DB::table('posts')->insert([
            'title' => 'Zakaj ga uporabljamo?',
            'category_id' => 2,
            'user_id' => 1,
            'intro' => 'Lorem Ipsum je slepi tekst, ki se uporablja pri razvoju tipografij in pri pripravi za tisk. ',
            'body' => 'Lorem Ipsum je slepi tekst, ki se uporablja pri razvoju tipografij in pri pripravi za tisk. Lorem Ipsum je v uporabi že več kot petsto let saj je to kombinacijo znakov neznani tiskar združil v vzorčno knjigo že v začetku 16. stoletja. To besedilo pa ni zgolj preživelo pet stoletij, temveč se je z malenkostnimi spremembami uspešno uveljavilo tudi v elektronskem namiznem založništvu. Na priljubljenosti je Lorem Ipsum pridobil v sedemdesetih letih prejšnjega stoletja, ko so na trg lansirali Letraset folije z Lorem Ipsum odstavki. V zadnjem času se Lorem Ipsum pojavlja tudi v priljubljenih programih za namizno založništvo kot je na primer Aldus PageMaker.',
        ]);
        DB::table('posts')->insert([
            'title' => 'Kje ga lahko dobim?',
            'category_id' => 3,
            'user_id' => 1,
            'intro' => 'Lorem Ipsum je slepi tekst, ki se uporablja pri razvoju tipografij in pri pripravi za tisk. ',
            'body' => 'Lorem Ipsum je slepi tekst, ki se uporablja pri razvoju tipografij in pri pripravi za tisk. Lorem Ipsum je v uporabi že več kot petsto let saj je to kombinacijo znakov neznani tiskar združil v vzorčno knjigo že v začetku 16. stoletja. To besedilo pa ni zgolj preživelo pet stoletij, temveč se je z malenkostnimi spremembami uspešno uveljavilo tudi v elektronskem namiznem založništvu. Na priljubljenosti je Lorem Ipsum pridobil v sedemdesetih letih prejšnjega stoletja, ko so na trg lansirali Letraset folije z Lorem Ipsum odstavki. V zadnjem času se Lorem Ipsum pojavlja tudi v priljubljenih programih za namizno založništvo kot je na primer Aldus PageMaker.',
        ]);
        DB::table('posts')->insert([
            'title' => 'Od kod prihaja?',
            'category_id' => 5,
            'user_id' => 1,
            'intro' => 'Lorem Ipsum je slepi tekst, ki se uporablja pri razvoju tipografij in pri pripravi za tisk. ',
            'body' => 'Lorem Ipsum je slepi tekst, ki se uporablja pri razvoju tipografij in pri pripravi za tisk. Lorem Ipsum je v uporabi že več kot petsto let saj je to kombinacijo znakov neznani tiskar združil v vzorčno knjigo že v začetku 16. stoletja. To besedilo pa ni zgolj preživelo pet stoletij, temveč se je z malenkostnimi spremembami uspešno uveljavilo tudi v elektronskem namiznem založništvu. Na priljubljenosti je Lorem Ipsum pridobil v sedemdesetih letih prejšnjega stoletja, ko so na trg lansirali Letraset folije z Lorem Ipsum odstavki. V zadnjem času se Lorem Ipsum pojavlja tudi v priljubljenih programih za namizno založništvo kot je na primer Aldus PageMaker.',
        ]);
        DB::table('posts')->insert([
            'title' => 'Kaj je Lorem Ipsum?',
            'category_id' => 2,
            'user_id' => 1,
            'intro' => 'Ogólnie znana teza głosi, iż użytkownika może rozpraszać zrozumiała zawartość strony, kiedy ten chce zobaczyć ',
            'body' => 'Lorem Ipsum je slepi tekst, ki se uporablja pri razvoju tipografij in pri pripravi za tisk. Lorem Ipsum je v uporabi že več kot petsto let saj je to kombinacijo znakov neznani tiskar združil v vzorčno knjigo že v začetku 16. stoletja. To besedilo pa ni zgolj preživelo pet stoletij, temveč se je z malenkostnimi spremembami uspešno uveljavilo tudi v elektronskem namiznem založništvu. Na priljubljenosti je Lorem Ipsum pridobil v sedemdesetih letih prejšnjega stoletja, ko so na trg lansirali Letraset folije z Lorem Ipsum odstavki. V zadnjem času se Lorem Ipsum pojavlja tudi v priljubljenih programih za namizno založništvo kot je na primer Aldus PageMaker.',
        ]);
        DB::table('posts')->insert([
            'title' => 'Czym jest Lorem Ipsum?',
            'category_id' => 1,
            'user_id' => 1,
            'intro' => 'Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym.',
            'body' => 'Lorem Ipsum je slepi tekst, ki se uporablja pri razvoju tipografij in pri pripravi za tisk. Lorem Ipsum je v uporabi že več kot petsto let saj je to kombinacijo znakov neznani tiskar združil v vzorčno knjigo že v začetku 16. stoletja. To besedilo pa ni zgolj preživelo pet stoletij, temveč se je z malenkostnimi spremembami uspešno uveljavilo tudi v elektronskem namiznem založništvu. Na priljubljenosti je Lorem Ipsum pridobil v sedemdesetih letih prejšnjega stoletja, ko so na trg lansirali Letraset folije z Lorem Ipsum odstavki. V zadnjem času se Lorem Ipsum pojavlja tudi v priljubljenih programih za namizno založništvo kot je na primer Aldus PageMaker.',
        ]);
        DB::table('posts')->insert([
            'title' => 'Skąd to wziąć?',
            'category_id' => 5,
            'user_id' => 1,
            'intro' => '3. Жмем категорию – переходим в неё, в ней список новостей, выводится по 5 на страницу (заголовки, без контента), под списком – пагинация ',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
        ]);
        DB::table('posts')->insert([
            'title' => 'Skąd się to wzięło?',
            'category_id' => 5,
            'user_id' => 1,
            'intro' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
        ]);
        DB::table('posts')->insert([
            'title' => 'Skąd się to wzięło?',
            'category_id' => 1,
            'user_id' => 1,
            'intro' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
        ]);
        DB::table('posts')->insert([
            'title' => 'Skąd się to wzięło?',
            'category_id' => 2,
            'user_id' => 1,
            'intro' => '4. При переходе по ссылке на новость – страничка с новостью. Предусмотреть наличие фото/картинок в новости. Также  нужно разместить блок с информацией, сколько людей ещё читают этот контент прямо сейчас – а значит',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
        ]);
        DB::table('posts')->insert([
            'title' => 'Skąd się to wzięło?',
            'category_id' => 3,
            'user_id' => 1,
            'intro' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
        ]);
        DB::table('posts')->insert([
            'title' => 'Skąd się to wzięło?',
            'category_id' => 4,
            'user_id' => 1,
            'intro' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
        ]);
        DB::table('posts')->insert([
            'title' => 'Skąd się to wzięło?',
            'category_id' => 1,
            'user_id' => 1,
            'intro' => 'W przeciwieństwie do rozpowszechnionych opinii, Lorem Ipsum nie jest tylko przypadkowym tekstem.',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
        ]);
        DB::table('posts')->insert([
            'title' => 'Skąd się to wzięło?',
            'category_id' => 4,
            'user_id' => 1,
            'intro' => 'Jest dostępnych wiele różnych wersji Lorem Ipsum, ale większość zmieniła się pod wpływem dodanego humoru czy przypadkowych słów,',
            'body' => 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).',
        ]);
    }
}
