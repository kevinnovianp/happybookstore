<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fiction
        Detail::create([
            'book_id' => 1,
            'author' => 'J. M. Barrie',
            'publisher' => 'TCK Publishing',
            'year' => 2000,
            'description' => 'Nullam ultrices vehicula arcu, quis interdum arcu vestibulum placerat. Nulla sodales malesuada ante a rhoncus. Fusce in finibus justo, sed bibendum dolor. Praesent venenatis gravida sapien ut consectetur. Aliquam ante ligula, tempor in sollicitudin sed, venenatis et felis. Nulla posuere mauris sed finibus euismod. Sed sollicitudin dictum blandit.'
        ]);
        Detail::create([
            'book_id' => 2,
            'author' => 'Emma Straub',
            'publisher' => 'Penguin Random House',
            'year' => 2010,
            'description' => 'Nam ullamcorper bibendum enim eu gravida. Cras aliquam sit amet nibh non pulvinar. Morbi eu tortor non urna ornare eleifend vel in urna. Vestibulum ac risus dolor. Fusce eget commodo nisl, vel porta tortor. Vestibulum sollicitudin nisi vel magna finibus porta. Duis purus justo, tempor at lorem et, mattis pharetra sem. Fusce maximus lectus at massa placerat placerat. Integer et elit erat. In scelerisque orci a erat lacinia, vitae congue diam condimentum. Aenean consequat leo at augue semper semper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque a nibh a massa congue ultricies et ac sapien. Etiam metus massa, scelerisque non diam eget, mollis sollicitudin ligula.'
        ]);
        Detail::create([
            'book_id' => 3,
            'author' => 'Mary Gregor',
            'publisher' => 'Reed Elsevier',
            'year' => 1999,
            'description' => 'Aliquam vestibulum sollicitudin nulla ut consequat. Sed in posuere lacus. Aliquam viverra dictum augue, sagittis congue est placerat sit amet. Maecenas pharetra porta mi, quis condimentum eros convallis at. Cras non tortor ante. Curabitur sit amet risus sed nulla facilisis placerat at vitae dui. Cras in lorem nec ex iaculis rutrum a at nulla. Donec lobortis vitae nunc et egestas. Aenean eleifend iaculis venenatis. Sed dictum sapien mi, a iaculis enim consectetur nec. Nulla luctus mi ante, nec imperdiet neque dapibus ut.'
        ]);
        Detail::create([
            'book_id' => 4,
            'author' => 'David Baldacci',
            'publisher' => 'Harper Collins',
            'year' => 2015,
            'description' => 'Vivamus odio sem, faucibus eu rutrum eu, rutrum sed ipsum. Vestibulum vel lacus in dui convallis laoreet. Phasellus sodales euismod ex non volutpat. Nunc eget elit in felis tristique scelerisque. Curabitur aliquet lobortis quam, in scelerisque massa blandit vel. In sagittis iaculis eros. Proin scelerisque arcu in libero congue, nec commodo urna vulputate.'
        ]);
        Detail::create([
            'book_id' => 5,
            'author' => 'James Patterson',
            'publisher' => 'Simon & Schuster',
            'year' => 1995,
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sit amet ultricies est. Fusce quam libero, viverra non accumsan sit amet, pharetra sed augue. Mauris venenatis, libero id iaculis malesuada, nisl libero finibus lacus, eget elementum urna eros in sem. Ut auctor condimentum urna quis blandit.'
        ]);
        Detail::create([
            'book_id' => 6,
            'author' => 'Jennifer Weiner',
            'publisher' => 'Phoenix Yard Books',
            'year' => 2000,
            'description' => 'In aliquam a nibh vel imperdiet. Nulla eget lacus at dolor vehicula lacinia non eu dui. Curabitur posuere arcu at consectetur dapibus. Ut vel lorem odio. Morbi sit amet elit tempor, maximus lorem at, commodo magna. Curabitur convallis hendrerit maximus. Duis massa nunc, gravida ac tincidunt nec, rhoncus in ipsum.'
        ]);
        Detail::create([
            'book_id' => 7,
            'author' => 'Laura Dave',
            'publisher' => 'Pan Macmillan',
            'year' => 2011,
            'description' => 'Nunc dapibus, lorem in convallis euismod, nibh eros pretium libero, non pharetra orci nulla et justo. Nam interdum tortor sit amet efficitur auctor. Mauris luctus metus vitae tristique posuere. Curabitur feugiat suscipit tellus, sit amet porta ante pretium quis. Nullam turpis quam, lacinia sit amet dolor vitae, ullamcorper lacinia magna.'
        ]);
        Detail::create([
            'book_id' => 8,
            'author' => 'Adrian McKinty',
            'publisher' => 'Bloomsbury',
            'year' => 1999,
            'description' => 'Maecenas posuere id velit sit amet posuere. Sed viverra posuere est, vel aliquam ligula. Nam nec posuere erat, quis scelerisque dolor. Morbi congue cursus ipsum, at venenatis odio facilisis sed. Aenean eu dolor nibh. Quisque dapibus gravida lorem id ultricies. Morbi congue ullamcorper dui, eu aliquam nibh vulputate id. Quisque justo tortor, dignissim vitae nulla ut, rhoncus elementum nibh. Nulla facilisi. Cras a nunc vehicula, elementum tortor nec, pharetra nisi.'
        ]);
        Detail::create([
            'book_id' => 9,
            'author' => 'Mary Kay Andrews',
            'publisher' => 'Arbordale Publishing',
            'year' => 2018,
            'description' => 'Sed ut dictum sem, eu sagittis felis. Cras turpis quam, consectetur luctus sem vitae, commodo convallis leo. Vestibulum vel est eget nisl congue feugiat vitae quis arcu. Nam condimentum, lacus in vestibulum elementum, enim justo semper leo, ac auctor lorem ante ut orci. Nulla elit urna, commodo vel congue at, lacinia quis nisl. In id velit risus. Suspendisse vitae efficitur dui. Etiam ac velit vel mi blandit porta in non est. Pellentesque blandit tortor justo, vel ultrices elit sodales eu. Phasellus vitae elit a nibh cursus feugiat. In iaculis ultrices orci, a ullamcorper dui viverra eu. In venenatis, nibh et aliquet sollicitudin, nulla arcu sagittis diam, ut consequat sem libero nec mauris.'
        ]);
        Detail::create([
            'book_id' => 10,
            'author' => 'Christopher Moore',
            'publisher' => 'Arcade Publishing',
            'year' => 2001,
            'description' => 'Morbi tristique commodo urna, ac eleifend libero tristique non. Aenean ipsum nunc, sodales eget neque vitae, tincidunt pharetra nunc. Phasellus est leo, vestibulum id felis porta, eleifend blandit nibh. Pellentesque suscipit, risus sit amet vulputate dapibus, nisl nisl aliquam mauris, eget finibus augue nulla non velit.'
        ]);
        Detail::create([
            'book_id' => 11,
            'author' => 'Hilary Mantel',
            'publisher' => 'Arcade Publishing',
            'year' => 2009,
            'description' => 'Donec quis leo vitae diam vehicula tincidunt. Quisque consectetur blandit justo et sodales. Nullam ac blandit mauris, ac placerat nibh. Fusce eu molestie turpis. Cras vitae aliquet nisi. Nulla facilisi. Cras pharetra neque eu nisi ultricies, at cursus nisl consequat. Donec eu nibh pharetra, tempus justo in, tempor magna. Fusce elit neque, rutrum ut pellentesque sed, pulvinar quis augue. Vivamus semper eleifend quam ac tincidunt. Aliquam non sapien sodales, dapibus massa vel, tempor nisi. Pellentesque aliquam turpis est, porttitor tincidunt metus convallis ut. In iaculis lacus in rhoncus varius.'
        ]);
        Detail::create([
            'book_id' => 12,
            'author' => 'Douglas Struart',
            'publisher' => 'Beacon Publishing',
            'year' => 2019,
            'description' => 'Aliquam erat volutpat. Nullam nec hendrerit neque. Vestibulum pellentesque tortor neque, a pulvinar ligula cursus nec. Mauris gravida a purus ac egestas. Nunc sed enim at quam aliquam fermentum et ac lacus. Donec laoreet mattis lacus. Nam malesuada massa dolor, et mattis magna lacinia ac. Etiam at sagittis tellus. Mauris diam ante, viverra a elementum ut, lacinia non sem. Quisque at ligula tortor.'
        ]);

        // Science
        Detail::create([
            'book_id' => 13,
            'author' => 'Richard Feynman',
            'publisher' => 'Arkham House',
            'year' => 1999,
            'description' => 'Curabitur felis magna, semper vel nibh quis, viverra lobortis ipsum. Suspendisse sollicitudin sollicitudin felis id porta. Proin elementum, eros quis gravida cursus, tellus neque laoreet tellus, aliquam volutpat neque arcu quis diam. Integer vel condimentum neque. Quisque egestas et urna et vehicula. Suspendisse egestas sem a ligula eleifend, aliquet congue eros rutrum. Nam varius feugiat dignissim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin ullamcorper odio eget erat facilisis iaculis.'
        ]);
        Detail::create([
            'book_id' => 14,
            'author' => 'Carl Sagan',
            'publisher' => 'Armida Publications',
            'year' => 2010,
            'description' => 'Fusce vulputate, neque sit amet dignissim ultrices, purus lorem elementum mauris, sit amet consectetur ante erat at eros. Morbi euismod rutrum turpis, quis semper risus aliquam at. Donec pretium metus risus, sed venenatis eros convallis eu. Nunc eget velit erat. Aenean et auctor leo. Morbi eleifend mattis ligula, sit amet eleifend dolor porttitor quis. Sed vestibulum suscipit purus, eu posuere dui volutpat non. Suspendisse at mi urna.'
        ]);
        Detail::create([
            'book_id' => 15,
            'author' => 'Carl Sagan',
            'publisher' => 'B & W Publishing',
            'year' => 2015,
            'description' => 'Cras et pretium quam. Donec in tortor arcu. Etiam in turpis sagittis, dictum elit a, iaculis lacus. Nulla tincidunt pretium elit vitae aliquam. Proin eu eros in turpis commodo ultrices. Quisque sem urna, finibus quis ultricies id, efficitur volutpat nisi. In fringilla elit sed dui ornare pellentesque gravida eu quam. Vestibulum lacus purus, laoreet ac faucibus luctus, ultricies sed mi. Suspendisse aliquet mauris ac odio commodo tincidunt. Duis et volutpat tellus, in bibendum orci. Vivamus tristique, enim sed tincidunt ornare, tortor ex porttitor diam, et viverra nisi quam sed dolor.'
        ]);
        Detail::create([
            'book_id' => 16,
            'author' => 'Douglas R. Hofstadter',
            'publisher' => 'Beacon Publishing',
            'year' => 2001,
            'description' => 'Vivamus et sapien metus. Nunc semper arcu id massa dictum, ut fringilla tortor condimentum. Aenean scelerisque rutrum ipsum ac mattis. Duis sollicitudin euismod dolor, quis mollis ipsum porttitor sit amet. Nullam ipsum augue, faucibus non vestibulum sed, pharetra et orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
        ]);
        Detail::create([
            'book_id' => 17,
            'author' => 'Richard Feynman',
            'publisher' => 'John Blake Publishing',
            'year' => 2002,
            'description' => 'Integer vulputate, purus eget auctor imperdiet, lectus ligula posuere dui, nec iaculis leo arcu ac sapien. Vivamus ullamcorper eu augue sit amet condimentum. Vestibulum interdum malesuada turpis ac tincidunt. In hac habitasse platea dictumst. Donec luctus enim a tellus sodales, ac rutrum felis gravida. Aenean nec accumsan nisi. Proin sapien sem, facilisis vel quam sit amet, placerat scelerisque massa. Donec eu euismod tellus. Nullam sagittis nisl ut commodo mollis. Vivamus sodales, lectus ac ornare luctus, lectus sem consectetur nisl, mollis luctus eros libero eu elit.'
        ]);
        Detail::create([
            'book_id' => 18,
            'author' => 'Bill Bryson',
            'publisher' => 'Capstone Publishers',
            'year' => 2011,
            'description' => 'Nam dapibus gravida lectus, eget faucibus erat suscipit nec. Etiam nec vehicula tellus, at auctor mi. Donec tincidunt elementum lacus, vitae mattis augue tempor sodales. Aenean id aliquet massa. In hac habitasse platea dictumst. Cras tempus purus vel nibh vestibulum, et pulvinar odio ullamcorper. Duis ipsum mauris, laoreet eget eleifend ac, molestie eu magna. Maecenas vulputate ex in scelerisque lacinia. Mauris rutrum venenatis purus, id feugiat arcu. Vestibulum urna magna, dapibus in euismod vel, pharetra ac nibh. Praesent et velit eu nisi dignissim accumsan. Aenean at orci mauris. Aliquam ac molestie arcu. Pellentesque sed diam at ipsum vehicula volutpat id ut justo. Nunc molestie felis quis turpis luctus dictum. Vestibulum placerat finibus orci.'
        ]);
        Detail::create([
            'book_id' => 19,
            'author' => 'Richard Dawkins',
            'publisher' => 'Flame Tree Publishing',
            'year' => 2000,
            'description' => 'Pellentesque pharetra feugiat auctor. Aliquam erat volutpat. Integer ultrices lorem eget mauris faucibus, id rhoncus ipsum iaculis. Pellentesque justo nisl, commodo et dapibus sed, mollis in arcu. Phasellus lectus erat, ornare eu ipsum quis, lacinia eleifend eros. Donec neque dui, tincidunt ac imperdiet quis, feugiat non mauris. Morbi est libero, sagittis ac mauris non, congue euismod nibh. Quisque commodo vulputate turpis, eu fermentum purus tristique quis.'
        ]);
        Detail::create([
            'book_id' => 20,
            'author' => 'Stephen Hawking',
            'publisher' => 'Morgan James Publishing',
            'year' => 2001,
            'description' => 'Nullam a interdum massa. Maecenas id laoreet quam, sed placerat augue. Etiam eu eros quis lectus faucibus dictum ut et est. Aenean pretium massa arcu, porttitor aliquam ipsum pretium vel. Donec pharetra, purus quis finibus interdum, nisi lorem faucibus nisl, sit amet ultrices risus elit eu libero. Praesent elementum varius enim non auctor. Nam ipsum massa, volutpat nec hendrerit non, tincidunt pulvinar lacus.'
        ]);
        Detail::create([
            'book_id' => 21,
            'author' => 'Stephen Hawking',
            'publisher' => 'Manning Publications',
            'year' => 1990,
            'description' => 'Integer vel velit risus. Donec eget viverra nisl, vel feugiat enim. Aliquam posuere odio non erat aliquam, vel placerat est vehicula. Cras porttitor varius ex, vitae vestibulum nibh placerat a. Donec libero metus, semper ac neque ut, mattis laoreet turpis. Vestibulum varius est sit amet nulla bibendum, nec pharetra tortor auctor. Nullam in ex erat.'
        ]);
        Detail::create([
            'book_id' => 22,
            'author' => 'Richard Dawkins',
            'publisher' => 'Medknow Publications',
            'year' => 2007,
            'description' => 'Mauris cursus lectus non lectus finibus varius. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus semper interdum eleifend. Nullam volutpat mauris leo, at cursus dui cursus eu. Cras venenatis suscipit tempus.'
        ]);
        Detail::create([
            'book_id' => 23,
            'author' => 'Daniel Kahneman',
            'publisher' => 'Tuttle Publishing',
            'year' => 1997,
            'description' => 'Nullam vel quam elementum enim convallis vehicula. In ex nulla, semper quis neque vel, condimentum egestas justo. Suspendisse vulputate, purus id blandit ultrices, eros arcu dictum risus, a auctor justo libero a metus. Aenean lobortis turpis in urna efficitur scelerisque in a risus. Fusce urna justo, sagittis vel leo volutpat, laoreet interdum nulla. Aenean vitae nulla tellus. Fusce ullamcorper erat sed pharetra efficitur. Aenean porta, metus sed tincidunt accumsan, purus justo tincidunt leo, nec pharetra risus odio a eros. Mauris imperdiet elit et gravida feugiat. Morbi posuere et leo ac pretium. Sed eget lacinia eros.'
        ]);
        Detail::create([
            'book_id' => 24,
            'author' => 'Richard Dawkins',
            'publisher' => 'Tachyon Publications',
            'year' => 2000,
            'description' => 'Nam semper dignissim quam ac efficitur. Phasellus sollicitudin, tortor ac eleifend tristique, dui leo iaculis enim, sit amet bibendum libero ante nec orci. Etiam felis odio, porttitor at lorem sit amet, tempus commodo tellus. Aliquam semper, sapien vel eleifend mattis, enim risus consequat quam, in fermentum ligula quam id odio.'
        ]);
        Detail::create([
            'book_id' => 25,
            'author' => 'Brian Greene',
            'publisher' => 'City Lights Publishers',
            'year' => 2003,
            'description' => 'Fusce efficitur ultrices nulla sit amet fringilla. Sed tristique luctus est vel aliquet. Ut ligula sapien, lobortis sit amet mollis a, consectetur ac enim. Nullam porttitor semper ultrices. Proin tempor vehicula tempor. Donec semper nulla sit amet sem laoreet, non scelerisque nisi eleifend. Integer mattis augue vitae dapibus dapibus. Nunc sed diam in mauris pretium hendrerit.'
        ]);
        Detail::create([
            'book_id' => 26,
            'author' => 'Henrietta Lacks',
            'publisher' => 'Dover Publications',
            'year' => 2014,
            'description' => 'Aliquam blandit dictum mauris et elementum. In pulvinar arcu dolor, vitae feugiat dolor rutrum a. Mauris sollicitudin lectus eget elit placerat ultrices. Donec interdum ac augue non accumsan. Integer pharetra et massa sit amet porta. Nunc interdum lobortis fringilla. Aliquam erat volutpat. Nullam lacus erat, vehicula eu viverra nec, egestas a elit. Etiam auctor nisl quam, non tempus sem consequat vitae. Nulla hendrerit diam non eleifend efficitur.'
        ]);
        Detail::create([
            'book_id' => 27,
            'author' => 'Charles Darwin',
            'publisher' => 'Graywolf Press',
            'year' => 2003,
            'description' => 'Etiam pharetra arcu ultricies, aliquam libero vel, volutpat sapien. Curabitur condimentum viverra mauris, id gravida elit pretium condimentum. Duis arcu diam, mollis ut dignissim ac, tristique hendrerit arcu. Vivamus nunc mauris, accumsan non elit eget, maximus convallis dolor. Curabitur mollis non libero non interdum. Morbi ultrices id tellus a tempor. Morbi dictum, odio id sagittis pellentesque, purus arcu finibus nisl, in pretium lorem dolor ac purus. Nam efficitur turpis quis urna consectetur, a pellentesque sapien luctus. Proin vel laoreet nulla. Maecenas sollicitudin enim dolor.'
        ]);

        // Computer
        Detail::create([
            'book_id' => 28,
            'author' => 'Chris Bernhardt',
            'publisher' => 'Dorrance Publishing Company',
            'year' => 2000,
            'description' => 'Nam vitae massa nisi. Vivamus elit est, dictum non dignissim et, dapibus eget velit. Vestibulum venenatis gravida tellus sed consequat. Nullam dignissim, erat quis tempor tempor, felis odio facilisis nisl, non malesuada arcu lacus id ex. Aenean euismod ullamcorper dolor, a auctor tellus ultricies in. Sed eu lacus quis ante aliquam fringilla et ac lacus. Phasellus vitae mi tincidunt, vehicula eros nec, vulputate est. Morbi posuere luctus enim sit amet fermentum. Nam id consequat purus.'
        ]);
        Detail::create([
            'book_id' => 29,
            'author' => 'David L. Ferro',
            'publisher' => 'Gantec Publishing Solutions',
            'year' => 2002,
            'description' => ''
        ]);
        Detail::create([
            'book_id' => 30,
            'author' => 'Michael A. Hiltzik',
            'publisher' => 'Ripple Grove Press',
            'year' => 2000,
            'description' => ''
        ]);
        Detail::create([
            'book_id' => 31,
            'author' => 'Fred Kaplan',
            'publisher' => 'Gantec Publishing Solutions',
            'year' => 1990,
            'description' => 'Suspendisse accumsan, sapien non tempor sollicitudin, purus lectus consectetur tortor, in porta sapien ex eu dolor. Nam facilisis eget magna eu ornare. Praesent rhoncus augue porttitor enim porta, sit amet semper diam posuere. Cras mi dui, pulvinar nec tincidunt vel, porttitor eget nulla. Curabitur quis semper neque, non fermentum dolor. Donec a mollis eros. Nunc eu sem facilisis, gravida elit vel, pretium nulla. Sed rutrum mi eu purus vulputate iaculis. Etiam condimentum quam id congue pharetra. Vestibulum elementum blandit placerat.'
        ]);
        Detail::create([
            'book_id' => 32,
            'author' => 'Charles Dierbach',
            'publisher' => 'North Atlantic Books',
            'year' => 2015,
            'description' => 'Donec rutrum lectus vel ultrices efficitur. Nulla nec est sit amet erat tempor sagittis. Pellentesque eu enim nibh. Maecenas interdum aliquet metus, vel accumsan mi semper sed. Suspendisse mattis iaculis varius. Aliquam faucibus, leo ac ullamcorper venenatis, velit est sodales elit, at pulvinar nisl sem ac quam. Vestibulum vel diam nec risus suscipit tempus quis sit amet urna. Etiam non velit justo. Aenean viverra vehicula sollicitudin. Mauris convallis, lectus ac interdum imperdiet, dolor lorem vestibulum nisi, eu molestie leo dolor id nulla. Nullam tempor purus quis mi laoreet, eu tristique risus tempor. Donec a justo at ligula iaculis vestibulum. Nullam eleifend libero ut augue congue, at luctus massa ornare.'
        ]);
        Detail::create([
            'book_id' => 33,
            'author' => 'Douglas Crockford',
            'publisher' => 'Wiley',
            'year' => 2009,
            'description' => 'Praesent mattis, neque ac maximus egestas, diam dolor hendrerit dui, tempor cursus elit lorem vitae nunc. Morbi vitae neque in ligula dignissim rhoncus et nec orci. Curabitur elementum eleifend est, a facilisis odio aliquet id. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean molestie sollicitudin nibh. Aliquam erat volutpat.'
        ]);
        Detail::create([
            'book_id' => 34,
            'author' => 'Shimon Schocken',
            'publisher' => 'Balboa Press',
            'year' => 2010,
            'description' => 'Pellentesque finibus scelerisque turpis, a varius quam blandit at. Quisque commodo risus vel nunc scelerisque, eget blandit quam gravida. Vestibulum sodales diam posuere porttitor tempor. Vestibulum tincidunt tempor enim vel lobortis. Donec laoreet tortor at purus aliquam fermentum. Etiam tristique mi lacus, non iaculis nisi aliquam ut. Etiam velit urna, iaculis in nulla eget, varius tincidunt elit. Quisque vel sapien et ipsum eleifend auctor eget vel dui.'
        ]);
        Detail::create([
            'book_id' => 35,
            'author' => 'Andrew Hunt',
            'publisher' => 'BookPress Publishing',
            'year' => 2011,
            'description' => 'Fusce ut congue elit, ac finibus sapien. Mauris ultricies metus quis eleifend condimentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse potenti. Aliquam nisl arcu, blandit eget placerat eget, rhoncus ut sem. Integer aliquet lorem at libero tempor, sit amet pharetra nisl lacinia. Duis mollis nibh nulla, ut rutrum est fermentum at.'
        ]);
    }
}
