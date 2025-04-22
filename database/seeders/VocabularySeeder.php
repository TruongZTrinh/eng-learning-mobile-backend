<?php

namespace Database\Seeders;

use App\Models\Vocabulary;
use App\Models\VocabularyQuizTopic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VocabularySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Xóa dữ liêu cũ trong bảng vocabularies
        Vocabulary::truncate();

        // fetch all topics
        $topics = VocabularyQuizTopic::all();

        // Define sameple data for each topic
        $sampleVocabularies = [
            'Thức ăn' => [
                [
                    'word' => 'Cheese',
                    'meaning' => 'Phô mai',
                    'example' => 'This cheese is so screamy and delicious. (Phô mai này rất béo và ngon.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745057371/cheese_qaxwhg.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Pizza',
                    'meaning' => 'Bánh pizza',
                    'example' => 'Let’s order a pizza and watch a movie tonight. (Hãy gọi pizza và xem phim tối nay nhé.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745057371/pizza_qpqu32.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Bread',
                    'meaning' => 'Bánh mì',
                    'example' => 'Can you buy a loaf of bread from the bakery? (Bạn có thể mua một ổ bánh mì từ tiệm bánh không?)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745057372/bread_zmrr5w.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Chicken',
                    'meaning' => 'Thịt gà',
                    'example' => 'I love grilled chicken. It’s so tasty! (Tôi thích gà nướng lắm. Nó rất ngon!)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745057372/chicken_rpyi9y.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Rice',
                    'meaning' => 'Gạo hoặc Cơm',
                    'example' => 'Do you eat rice every day? (Bạn có ăn cơm mỗi ngày không?)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745057371/rice_qmokjy.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Egg',
                    'meaning' => 'Trứng',
                    'example' => 'Do we have any eggs in the fridge? (Có trứng nào trong tủ lạnh không?)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745057372/egg_flnvzk.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Hot dog',
                    'meaning' => 'Xúc xích nướng',
                    'example' => 'Do you want a hot dog or a burger for lunch? (Bạn muốn xúc xích nướng hay bánh burger cho bữa trưa?)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745057372/hot_dog_dy9njn.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Curry',
                    'meaning' => 'Cà ri',
                    'example' => 'Can you make chicken curry for dinner? (Bạn có thể làm cà ri gà cho bữa tối không?)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745057371/curry_hb38wc.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Butter',
                    'meaning' => 'Bơ',
                    'example' => 'Could you spread some butter on my toast? (Bạn có thể phết một ít bơ lên bánh mì nướng của tôi không?)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745057371/butter_hf85of.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Fish',
                    'meaning' => 'Cá',
                    'example' => 'Fish is very healthy because it’s rich in omega-3. (Cá rất tốt cho sức khỏe vì nó giàu omega-3.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745057372/fish_tqcjoz.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Ingredient',
                    'meaning' => 'Nguyên liệu nấu ăn',
                    'example' => 'Garlic is a key ingredient in many Italian dishes. (Tỏi là một nguyên liệu chính trong nhiều món ăn Ý.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745078084/ingredient_dp8jmg.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Cuisine',
                    'meaning' => 'Ẩm thực',
                    'example' => 'Thai cuisine is known for its spicy and aromatic flavors. (Ẩm thực Thái được biết đến với hương vị cay và thơm đặc trưng.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745078085/cuisine_hcqklp.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Cutlery',
                    'meaning' => 'Bộ dung cụ ăn uống',
                    'example' => 'Please set the table with the cutlery before dinner. (Làm ơn bày bộ dao nĩa lên bàn trước bữa tối.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745078084/cutlery_rtsngu.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Appetizer',
                    'meaning' => 'Món khai vị',
                    'example' => 'We ordered a shrimp cocktail as an appetizer before the main course.(Chúng tôi gọi món cocktail tôm làm món khai vị trước món chính.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745078083/appetizer_kacino.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Dessert',
                    'meaning' => 'Món tráng miệng',
                    'example' => 'We had chocolate cake for dessert. (Chúng tôi ăn bánh sô-cô-la làm món tráng miệng.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745078084/dessert_mpnejj.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Snack',
                    'meaning' => 'Đồ ăn nhẹ',
                    'example' => 'I usually have a fruit snack in the afternoon. (Tôi thường ăn trái cây như một món ăn nhẹ vào buổi chiều.)​',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745078084/snack_rrvqgd.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Grains',
                    'meaning' => 'Ngũ cốc',
                    'example' => 'Whole grains are an important part of a balanced diet. (Ngũ cốc nguyên hạt là một phần quan trọng của chế độ ăn cân bằng.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745078085/grains_ipjprt.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Garnish',
                    'meaning' => 'Trang trí món ăn (rau thơm, lát chanh)',
                    'example' => 'The dish was served with a lemon slice as a garnish. (Món ăn được phục vụ với một lát chanh để trang trí.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745078083/garnish_pamn2j.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Condiment',
                    'meaning' => 'Gia vị (nước sốt, tương ớt, v.v.)',
                    'example' => 'Ketchup is a popular condiment for fries. (Sốt cà chua là một loại gia vị phổ biến cho khoai tây chiên.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745078085/condiment_sd6isc.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Recipe',
                    'meaning' => 'Công thức nấu ăn',
                    'example' => 'Do you have the recipe for this delicious soup? (Bạn có công thức cho món súp ngon này không?)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745078085/recipe_pp6qx6.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Appetite',
                    'meaning' => 'Sự thèm ăn',
                    'example' => 'The long hike gave me a huge appetite. (Chuyến đi bộ dài khiến tôi rất thèm ăn.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196659/Appetite_dhlwiz.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Cuisine',
                    'meaning' => 'Ẩm thực',
                    'example' => 'French cuisine is famous for its rich flavors. (Ẩm thực Pháp nổi tiếng với hương vị đậm đà.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196659/Cuisine_rzngup.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Portion',
                    'meaning' => 'Khẩu phần ăn',
                    'example' => 'The portions at this restaurant are very generous. (Khẩu phần ăn ở nhà hàng này rất hào phóng.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196659/Portion_rbmoue.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Beverage',
                    'meaning' => 'Đồ uống',
                    'example' => 'What kind of beverage would you like with your meal? (Bạn muốn loại đồ uống nào với bữa ăn của mình?)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196660/Beverage_hhqnji.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Delicacy',
                    'meaning' => 'Món đặc sản',
                    'example' => 'Caviar is considered a delicacy in many countries. (Trứng cá muối được coi là một món đặc sản ở nhiều quốc gia.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196659/Delicacy_v0otyo.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Ingredient',
                    'meaning' => 'Nguyên liệu',
                    'example' => 'Garlic is a key ingredient in many Italian dishes. (Tỏi là một nguyên liệu chính trong nhiều món ăn Ý.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196659/Ingredient_kgbpr1.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Texture',
                    'meaning' => 'Kết cấu (thực phẩm)',
                    'example' => 'The texture of the cake is soft and fluffy. (Kết cấu của chiếc bánh rất mềm và xốp.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196658/Texture_jeizsh.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Flavor',
                    'meaning' => 'Hương vị',
                    'example' => 'This dish has a unique flavor that I’ve never tasted before. (Món ăn này có một hương vị độc đáo mà tôi chưa từng nếm thử trước đây.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196659/Flavor_oqu1th.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Aroma',
                    'meaning' => 'Mùi thơm',
                    'example' => 'The aroma of freshly baked bread filled the kitchen. (Mùi thơm của bánh mì mới nướng tràn ngập căn bếp.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196659/Aroma_upu0zu.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Platter',
                    'meaning' => 'Đĩa lớn (đựng thức ăn)',
                    'example' => 'The waiter brought a platter of assorted cheeses. (Người phục vụ mang đến một đĩa lớn gồm nhiều loại phô mai.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745200224/Platter_nebcua.png',
                    'level' => 'hard',
                ],
            ],
            'Động vật' => [
                // Easy level
                [
                    'word' => 'Cat',
                    'meaning' => 'Mèo',
                    'example' => 'The cat is sleeping on the couch. (Con mèo đang ngủ trên ghế.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196157/Cat_nskkmc.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Dog',
                    'meaning' => 'Chó',
                    'example' => 'My dog loves to play fetch. (Con chó của tôi thích chơi ném bắt.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196157/Dog_iktlmh.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Fish',
                    'meaning' => 'Cá',
                    'example' => 'We have a goldfish in a bowl. (Chúng tôi có một con cá vàng trong bể.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196158/Fish_kklcaz.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Bird',
                    'meaning' => 'Chim',
                    'example' => 'The bird is singing in the tree. (Con chim đang hót trên cây.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196157/Bird_lkavnh.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Rabbit',
                    'meaning' => 'Thỏ',
                    'example' => 'The rabbit is eating a carrot. (Con thỏ đang ăn cà rốt.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196158/Rabit_mqj0vj.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Cow',
                    'meaning' => 'Bò',
                    'example' => 'The cow is grazing in the field. (Con bò đang gặm cỏ trên đồng.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196159/Cow_kxm9ez.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Horse',
                    'meaning' => 'Ngựa',
                    'example' => 'The horse is running in the meadow. (Con ngựa đang chạy trên đồng cỏ.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196159/Horse_qkpu26.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Sheep',
                    'meaning' => 'Cừu',
                    'example' => 'The sheep are grazing on the hill. (Những con cừu đang gặm cỏ trên đồi.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196159/Sheep_d8wihn.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Duck',
                    'meaning' => 'Vịt',
                    'example' => 'The duck is swimming in the pond. (Con vịt đang bơi trong ao.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196159/Duck_zvm85t.png',
                    'level' => 'easy',
                ],
                [
                    'word' => 'Pig',
                    'meaning' => 'Heo',
                    'example' => 'The pig is rolling in the mud. (Con heo đang lăn trong bùn.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196157/Pig_i9lxig.png',
                    'level' => 'easy',
                ],

                // Medium level
                [
                    'word' => 'Eagle',
                    'meaning' => 'Đại bàng',
                    'example' => 'The eagle is soaring high in the sky. (Con đại bàng đang bay cao trên bầu trời.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196210/Eagle_monvan.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Dolphin',
                    'meaning' => 'Cá heo',
                    'example' => 'Dolphins are very intelligent animals. (Cá heo là loài động vật rất thông minh.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196210/Dolphin_cu6t06.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Kangaroo',
                    'meaning' => 'Chuột túi',
                    'example' => 'Kangaroos are native to Australia. (Chuột túi có nguồn gốc từ Úc.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196239/Kangaroo_n6oxwz.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Panda',
                    'meaning' => 'Gấu trúc',
                    'example' => 'The panda is eating bamboo. (Con gấu trúc đang ăn tre.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196259/Panda_iqpkuq.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Crocodile',
                    'meaning' => 'Cá sấu',
                    'example' => 'The crocodile is lying near the riverbank. (Con cá sấu đang nằm gần bờ sông.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196187/Crocodile_asp6oj.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Peacock',
                    'meaning' => 'Con công',
                    'example' => 'The peacock is spreading its colorful feathers. (Con công đang xòe bộ lông sặc sỡ của nó.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196187/Peacock_qejpbf.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Penguin',
                    'meaning' => 'Chim cánh cụt',
                    'example' => 'Penguins live in cold climates. (Chim cánh cụt sống ở những vùng khí hậu lạnh.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196189/Penguin_xg3ubi.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Octopus',
                    'meaning' => 'Bạch tuộc',
                    'example' => 'The octopus has eight tentacles. (Con bạch tuộc có tám xúc tu.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196258/Octopus_tpspzf.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Giraffe',
                    'meaning' => 'Hươu cao cổ',
                    'example' => 'The giraffe is eating leaves from the tall tree. (Con hươu cao cổ đang ăn lá từ cây cao.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196209/Giraffe_kemoms.png',
                    'level' => 'medium',
                ],
                [
                    'word' => 'Zebra',
                    'meaning' => 'Ngựa vằn',
                    'example' => 'The zebra has black and white stripes. (Con ngựa vằn có sọc đen và trắng.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196210/Zebra_niwzk8.png',
                    'level' => 'medium',
                ],

                // Hard level
                [
                    'word' => 'Platypus',
                    'meaning' => 'Thú mỏ vịt',
                    'example' => 'The platypus is a unique mammal found in Australia. (Thú mỏ vịt là một loài động vật có vú độc đáo ở Úc.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196263/Platypus_uogcps.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Armadillo',
                    'meaning' => 'Tatu (thú có mai)',
                    'example' => 'The armadillo curls up into a ball when threatened. (Con tatu cuộn tròn thành một quả bóng khi bị đe dọa.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196263/Armadillo_mnzt2o.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Chameleon',
                    'meaning' => 'Tắc kè hoa',
                    'example' => 'The chameleon changes its color to blend in with its surroundings. (Con tắc kè hoa thay đổi màu sắc để hòa vào môi trường xung quanh.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196264/Chameleon_lavifp.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Hedgehog',
                    'meaning' => 'Nhím',
                    'example' => 'The hedgehog rolls into a ball when it feels danger. (Con nhím cuộn tròn lại khi cảm thấy nguy hiểm.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196264/Porcupine_saqdce.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Ostrich',
                    'meaning' => 'Đà điểu',
                    'example' => 'The ostrich is the largest bird in the world. (Đà điểu là loài chim lớn nhất thế giới.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196265/Ostrich_lkphoj.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Walrus',
                    'meaning' => 'Hải mã',
                    'example' => 'The walrus has long tusks and whiskers. (Con hải mã có ngà dài và râu.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196264/Walrus_xqccpq.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Koala',
                    'meaning' => 'Gấu túi',
                    'example' => 'The koala spends most of its time sleeping in eucalyptus trees. (Con gấu túi dành phần lớn thời gian ngủ trên cây bạch đàn.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196263/Koala_egokl9.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Sloth',
                    'meaning' => 'Con lười',
                    'example' => 'The sloth moves very slowly in the trees. (Con lười di chuyển rất chậm trên cây.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196264/Sloth_nj57l3.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Porcupine',
                    'meaning' => 'Nhím gai',
                    'example' => 'The porcupine uses its quills for protection. (Con nhím gai sử dụng gai của nó để tự vệ.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196264/Porcupine_saqdce.png',
                    'level' => 'hard',
                ],
                [
                    'word' => 'Antelope',
                    'meaning' => 'Linh dương',
                    'example' => 'The antelope runs swiftly across the savannah. (Con linh dương chạy nhanh qua thảo nguyên.)',
                    'image_path' => 'https://res.cloudinary.com/dfd78elce/image/upload/v1745196263/Antelope_xymxv1.png',
                    'level' => 'hard',
                ],
            ],

        ];

        foreach ($topics as $topic) {
            if (isset($sampleVocabularies[$topic->title])) {
                foreach ($sampleVocabularies[$topic->title] as $vocabulary) {
                    Vocabulary::create([
                        'vocabulary_quiz_topic_id' => $topic->id,
                        'word' => $vocabulary['word'],
                        'meaning' => $vocabulary['meaning'],
                        'example' => $vocabulary['example'],
                        'image_path' => $vocabulary['image_path'],
                        'level' => $vocabulary['level'],
                    ]);
                }
            }
        }
    }
}
