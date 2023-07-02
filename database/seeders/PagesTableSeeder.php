<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Provident quia nequ',
                'slug' => 'facilis_est_quis_rer',
                'layout' => 'main',
            'blocks' => '[{"data": {"title": "Ex quas deserunt ut ", "subtitle": "Dolores ad totam vol"}, "type": "title"}, {"data": {"content": "<p>&lt;script&gt;alert(\'Hacked\')&lt;/script&gt;</p><p><a class=\\"btn btn-primary\\" href=\\"#\\" target=\\"_blank\\" as_button=\\"true\\" button_theme=\\"primary\\">Lorem</a> ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque iaculis nec arcu sit amet laoreet. Donec molestie, nulla id sollicitudin pharetra, augue metus efficitur lacus, quis egestas felis arcu quis arcu. Donec ante dui, vulputate vitae turpis vel, imperdiet gravida sem. Duis porttitor velit ante, sed vestibulum urna feugiat a. Donec non eros mollis, pulvinar neque ac, efficitur dui. Duis metus dui, fermentum in sem ac, varius accumsan nibh. Vestibulum et purus quis dui tempus mattis quis non lectus. Praesent faucibus suscipit urna.</p><h3>Donec odio felis</h3><p style=\\"text-align: justify\\"></p><div class=\\"filament-tiptap-grid\\" type=\\"responsive\\" cols=\\"2\\"><div class=\\"filament-tiptap-grid__column\\"><ul><li><p style=\\"text-align: justify\\">Tempus at eleifend et,</p></li><li><p style=\\"text-align: justify\\">dictum vitae velit.</p></li><li><p style=\\"text-align: justify\\"><span style=\\"color: rgb(0, 0, 0)\\">Etiam faucibus </span></p></li><li><p style=\\"text-align: justify\\"><span style=\\"color: rgb(0, 0, 0)\\">enim tincidunt ligula tincidunt</span></p></li></ul><ol><li><p style=\\"text-align: justify\\">at venenatis est.</p></li><li><p style=\\"text-align: justify\\"><span style=\\"color: rgb(0, 0, 0)\\">Etiam faucibus enim </span></p></li><li><p style=\\"text-align: justify\\"><span style=\\"color: rgb(0, 0, 0)\\">tincidunt </span><a href=\\"#\\" as_button=\\"false\\" button_theme=\\"\\"><span style=\\"color: rgb(0, 0, 0)\\">ligula </span></a><span style=\\"color: rgb(0, 0, 0)\\">tincidunt</span></p></li></ol></div><div class=\\"filament-tiptap-grid__column\\"><p><span style=\\"color: rgb(0, 0, 0)\\">Fusce eu pretium velit. In pretium vitae neque vitae posuere. Duis consequat libero eget finibus feugiat. Vivamus condimentum dapibus urna sodales egestas. Aenean et purus lacinia, porttitor lacus a, ornare neque. Etiam faucibus enim tincidunt ligula tincidunt, dignissim convallis ante tincidunt. Praesent id suscipit mauris. Donec sit amet leo rutrum, vestibulum ipsum sit amet, faucibus ante. Fusce vitae magna tempor, laoreet diam et, vehicula ex. Praesent pretium consectetur tellus imperdiet volutpat. Cras id commodo tortor, vel vestibulum sem.</span></p></div></div><p style=\\"text-align: justify\\">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam ligula justo, dictum eu nibh vitae, aliquet iaculis massa. Vivamus et nisi purus. Morbi sagittis eros a dictum volutpat. Aenean bibendum metus quis purus ornare ultrices.</p><p style=\\"text-align: justify\\">Nunc non leo eu ante viverra commodo sed eu dolor. Aliquam tellus purus, aliquam sed volutpat sed, fermentum at dolor. Fusce ornare ligula a lorem bibendum, in volutpat eros imperdiet. Integer aliquam nulla vel felis scelerisque lobortis. Sed vel hendrerit nisl, eu vehicula tortor. Fusce sed scelerisque lectus, sit amet tincidunt justo. Nunc nec laoreet sem. Nullam molestie, nunc sit amet lobortis efficitur, ipsum eros vestibulum arcu, sit amet sollicitudin ante justo quis sapien. Nullam efficitur massa condimentum nulla egestas tempus. Curabitur eros lorem, finibus ac sagittis sed, egestas eu tortor. Etiam tincidunt, lectus nec eleifend varius, magna sem aliquet turpis, non fringilla tortor neque non nisl. Duis fringilla, nunc ut eleifend efficitur, elit enim egestas nisi, sed auctor enim dui sit amet arcu. Mauris malesuada, dolor in blandit pretium, odio nisi commodo ante, vitae ornare nibh lorem nec diam.</p><p style=\\"text-align: justify\\">Fusce eu pretium velit. In pretium vitae neque vitae posuere. Duis consequat libero eget finibus feugiat. Vivamus condimentum dapibus urna sodales egestas. Aenean et purus lacinia, porttitor lacus a, ornare neque. Etiam faucibus enim tincidunt ligula tincidunt, dignissim convallis ante tincidunt. Praesent id suscipit mauris. Donec sit amet leo rutrum, vestibulum ipsum sit amet, faucibus ante. Fusce vitae magna tempor, laoreet diam et, vehicula ex. Praesent pretium consectetur tellus imperdiet volutpat. Cras id commodo tortor, vel vestibulum sem. Cras eleifend, nisi id ultrices tincidunt, lorem velit sodales libero, ut luctus erat velit vel arcu. Aenean et ipsum id dolor sodales condimentum nec et diam. Curabitur sodales justo risus, non dictum elit tristique ac. Vestibulum in egestas erat, et mollis risus. Fusce mattis elementum justo vel tincidunt.</p><p style=\\"text-align: justify\\">Sed cursus leo ornare metus viverra, vitae porttitor enim viverra. Mauris vel velit consequat urna mattis gravida eu at augue. Aenean ultricies lectus vitae nibh pharetra tempus. Morbi efficitur convallis accumsan. Aenean ex purus, ultrices eu mauris quis, tempus elementum sapien. Etiam risus dui, ultricies ut dignissim id, porttitor vel neque. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent vulputate ante orci, ac placerat nisi mattis non. Pellentesque finibus, ex sed hendrerit fermentum, augue est laoreet odio, sit amet consequat dolor enim ut nibh. Nullam at mollis felis. Duis et feugiat leo. Cras tristique justo vel dui auctor, imperdiet convallis odio sagittis. Maecenas consectetur lobortis neque cursus cursus.</p>"}, "type": "content"}]',
                'parent_id' => NULL,
                'created_at' => '2023-07-02 11:56:17',
                'updated_at' => '2023-07-02 13:42:43',
            ),
        ));
        
        
    }
}