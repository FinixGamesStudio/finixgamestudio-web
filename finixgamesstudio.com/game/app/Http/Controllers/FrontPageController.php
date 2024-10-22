<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index() {
        
        return view('web.home');
    }

    public function aboutUs()  {
        return view('web.about');
    }

    public function services()  {
        return view('web.services');
    }
 
    public function contactUs()  {
        return view('web.contact');
    }

    public function privacyPolicy()  {
        return view('web.privacy-policy');
    }

    public function singleGame() {
        return view('web.gallery-single');   
    }

    public function gameDetails(Request $request)
    {
        $gameSlug = basename($_SERVER['REQUEST_URI']);
        $name = '';
        $content = '';
        $headerShortContent = '';
    
        if ($gameSlug == 'blitz21') {
            $name = '21 Blitz';
            $headerShortContent = 'A unique blend of Blackjack and Solitaire for card game enthusiasts!';
            $content .= '<div class="portfolio-description">
                <h2>🎉 Welcome to "Blitz 21"! 🎉</h2>
                <p> 🧠💡 Enjoy quick gameplay sessions ⏱️ while aiming for high scores. Choose between casual or competitive play!</p>
                
                <h3>🕹️ HOW TO PLAY</h3>
                <ul>
                    <li>Select from <strong>1️⃣ of the 4️⃣ lanes</strong> to play a card.</li>
                    <li>Create card stacks that add up to <strong>21 🃏✨</strong> to score points.</li>
                    <li>Avoid going over 21; exceeding this will end the lane. 🚫 Three busts mean the game is over. 😱</li>
                    <li>Combine cards for combos 🔗 and score bonuses 🔥 to enhance your strategy.</li>
                    <li>Complete the deck before the timer ⏰ runs out for additional points! 🏅</li>
                </ul>
                
                <h3>⭐ FEATURES</h3>
                <ul>
                    <li>Enjoy quick games 🎮 anytime, anywhere! 🛋️</li>
                    <li>Use the <strong>UNDO</strong> button to view the next card 👀 or reset any busts! 🔄</li>
                    <li>Maximize your score with combos and bonuses! 🏆</li>
                    <li>Replay decks to discover new scoring strategies! 🎯</li>
                    <li>Access a "How to Play" guide for helpful tips! 📚</li>
                    <li>Compatible touch controls 📲 for all devices!</li>
                    <li>Quick loading times ⏳ and smooth animations! 🎞️</li>
                    <li>Challenge yourself to improve your scores! 💯</li>
                </ul>
            </div>';

            $category = 'Card Game';
            $bannerImage = asset('assets/img/games/001.png');
        
        } elseif($gameSlug == 'blackjack21'){
            $name = '21 Black Jack';
            $headerShortContent = 'Enjoy Blackjack, also known as "21", where you complete against the dealer to achieve a total as close to 21 as possible without going over!';
            $content .= '<div class="portfolio-description">
            <h2>🎉 Blackjack - FREE CHIPS DAILY! 🎉</h2>
            
            <h3>🕹️ HOW TO PLAY</h3>
            <ul>
                <li>Picture cards (J, Q, K) are worth <strong>10</strong> each!</li>
                <li>Aces can count as <strong>1</strong> or <strong>11</strong>, giving you strategic options!</li>
                <li>Going over <strong>21</strong> results in a bust, and the dealer wins! 💥</li>
            </ul>
            
            <h3>💎 FEATURES</h3>
            <ul>
                <li>FREE Chips every day!</li>
                <li>Compete against the dealer in a classic card game.</li>
                <li>Classic Blackjack rules – easy to learn, exciting to play!</li>
                <li>Experience a Vegas-style environment anytime, anywhere.</li>
                <li>Download now and sharpen your Blackjack skills! 🌟</li>
            </ul>
        </div>';
            $category = 'Card Casino';
            $bannerImage = asset('assets/img/games/002.png');


        }elseif($gameSlug == 'callbreak'){
            $name = 'Call Break';
            $headerShortContent = 'Step into the world of Callbreak Champ, a strategic trick-based card game designed for four players. Utilising a standard deck of 52 playing cards, players engage in thrilling rounds of cunning and strategy';
            $content .= '<div class="portfolio-description">
                <h2>🏆 Callbreak Champ: The Ultimate Card Game Experience! 🃏</h2>
                <h3>🕹️ How to Play:</h3>
                <ul>
                    <li>🔄 <strong>Game Setup:</strong> Four players, no partnerships. A standard 52-card pack is used, with cards ranking from high to low: A-K-Q-J-10-9-8-7-6-5-4-3-2. The game proceeds counter-clockwise, with the first dealer chosen randomly.</li>
                    <li>🃏 <strong>Trump:</strong> Spades serve as the predefined Trump suit and can be customised in the settings.</li>
                    <li>📢 <strong>The Call:</strong> Bidding begins with the player to the dealer\'s right and proceeds counterclockwise. Each player must make a bid, ranging from 1 to 12, representing the number of tricks they aim to win.</li>
                    <li>🎮 <strong>Gameplay:</strong> The player to the dealer\'s right leads the first trick, with subsequent tricks led by the winner of the previous trick. Players must follow suit if possible, playing a higher card if available. Those unable to follow suit may play a trump card if they hold one, or any other card. Each trick is won by the highest trump or the highest card of the led suit if no trumps are played.</li>
                    <li>📈 <strong>Scoring:</strong> Players aim to fulfil their bid. Failing to do so results in negative points equal to the bid, while meeting or exceeding the bid earns points equivalent to the bid plus 0.1 points for each extra trick. The player with the highest points after a set number of rounds wins.</li>
                </ul>

                <h3>💎 Features:</h3>
                <ul>
                    <li>🎯 Intuitive Interface: Enjoy a seamless drag interface for playing cards.</li>
                    <li>🤖 Improved AI: Engage with bots featuring enhanced artificial intelligence in single-player mode.</li>
                    <li>🎨 Customization: Customise your gaming experience to suit your preferences.</li>
                </ul>

                <h3>🌟 Coming Soon:</h3>
                <ul>
                    <li>📶 Multiplayer: Play locally, over Wi-Fi, or via hotspot with friends.</li>
                    <li>📊 Score Tracking: View score history and statistics.</li>
                    <li>🏅 Leaderboards: Compete for the top spot and unlock achievements.</li>
                </ul>

                <h3>📍 Localised Name:</h3>
                <ul>
                    <li>🇳🇵 CallBreak (Nepal)</li>
                    <li>🇮🇳 Lakdi, Lakadi (India)</li>
                </ul>

                <p>Join the millions of players in India and Nepal who have made Callbreak Champ their favourite card game! Download now and become the ultimate champion! 🌟</p>
            </div>';
            $category = 'Card Game';
            $bannerImage = asset('assets/img/games/003.png');

        }elseif($gameSlug == 'spades'){
            $name = 'Spades Champ';
            $headerShortContent = 'Experience Spades Champ, a strategic trick-based card game designed for four players! Utilizing a standard deck of 52 playing cards, you can engage in exciting rounds of strategy and skill.';
            $content .= '<div class="portfolio-description">
                <h2>🏆 Spades Champ: The Ultimate Card Game Experience! 🃏</h2>
                <h3>🕹️ How to Play:</h3>
                <ul>
                    <li>🔄 <strong>Game Setup:</strong> Gather four players (no partnerships required) and use a standard 52-card deck. Cards rank from high to low: A-K-Q-J-10-9-8-7-6-5-4-3-2. The first dealer is chosen randomly.</li>
                    <li>🃏 <strong>Trump Suit:</strong> Spades are the designated Trump suit, adding an exciting strategic layer to every hand.</li>
                    <li>📢 <strong>The Bid:</strong> Bidding begins with the player to the dealer\'s left and continues clockwise. Players bid on the number of tricks they aim to win, ranging from 0 (Nil) to the total number of cards in hand.</li>
                    <li>🎮 <strong>Gameplay:</strong> The player to the dealer\'s left leads the first trick, with subsequent tricks led by the winner of the previous one. Players must follow suit if possible. If they can’t, they may play a trump card or any other card. The highest trump or the highest card of the led suit wins the trick.</li>
                    <li>📈 <strong>Scoring:</strong> Players aim to meet their bids. Failing results in negative points equal to the bid, while meeting or exceeding it earns points for the bid plus one point for each extra trick (known as a bag). Collecting 10 bags incurs a penalty. The player with the highest score after a set number of rounds wins!</li>
                </ul>

                <p>Download Spades Champ today and enjoy a strategic card game experience with friends and family! 🌟</p>
            </div>';
            $category = 'Card Game';
            $bannerImage = asset('assets/img/games/004.png');


        }elseif($gameSlug == 'tablaclassics'){
            $name = 'Tabla Beats';
            $headerShortContent = 'Experience the mesmerising world of Tabla Beats, the ultimate rhythm game that revolves around the enchanting tabla drums. Play the tabla and watch as lively animated characters groove to your beats, creating a magical dance spectacle! Discover a captivating musical adventure, record your gameplay, and share your rhythmic performances with the world!';
            $content .= '<div class="portfolio-description">
                <h2>🎶 Tabla Beats: The Ultimate Rhythm Game! 🥁</h2>

                <p>Download Tabla Beats now and embark on a rhythmic journey filled with tabla drums, animated dances, and musical enchantment. Let your fingers create magic and watch as the tabla beats transport you to a world of rhythm and joy! Dance, play, and share your rhythmic masterpieces with the world!</p>
            
                <h3>💎 Key Features:</h3>
                <ul>
                    <li>🥁 <strong>Play the Tabla:</strong> Unleash your inner percussionist and tap into the soulful rhythms of the tabla drums. Feel the thrill as you produce authentic sounds and create beautiful music with your fingertips.</li>
                    <li>💃 <strong>Dance with Animated Characters:</strong> Witness the tabla beats come alive! As you play, watch the animated characters burst into life, showcasing their unique dance moves that perfectly match your rhythm. The more precise your timing, the more spectacular their dance performances become!</li>
                    <li>🎮 <strong>Engaging Rhythm Gameplay:</strong> Embark on an immersive journey through various game modes. Challenge yourself with rhythmic patterns, engage in thrilling dance-offs, or compose your own tabla masterpieces. Get ready for hours of creative and addictive beatplay!</li>
                    <li>🌟 <strong>Record and Share Your Performance:</strong> Capture your captivating tabla performances directly within the game. Record and save your gameplay to relive the magic or share it with friends and music enthusiasts. Let your rhythmic talents inspire and spread joy!</li>
                    <li>🎶 <strong>Explore the Musical Adventure:</strong> Dive into a musical adventure like no other. Discover new compositions, unlock vibrant levels, and unravel the secrets of tabla drums. Immerse yourself in a world filled with rhythm, melody, and endless possibilities.</li>
                </ul>
            
                <p>Download Tabla Beats today and start your musical adventure! 🎉</p>
            </div>';
        
            $category = 'Entertainment';
            $bannerImage = asset('assets/img/games/005.png');

        }elseif($gameSlug == 'learnframanimal'){
            $name = 'Learning Farm Animals' ; 
            $headerShortContent = 'Farm animals are cute, happy, and funny! 🐑🐴 Our interactive educational games for kids in kindergarten are creative and help children develop fine motor skills while learning about domestic animals that live on the farm! 🐥🐄';
            $content .= '<div class="portfolio-description">
                <h2>🎓 Learning Farm Animals: Educational Games For Kids 🐄🐖🐓</h2>

                <p><strong>Farm Animals for Kids</strong> app contains various activities and games to make learning fun for kids. With this app, kids can learn farm animals\' names 🐷🐰.</p>

                <p>Farm animals provide the perfect opportunity to develop and identify animals 🐐🐂.</p>

                <h3>🧩 Puzzle Kids:</h3>
                <p>Puzzle Kids takes learning seriously with a selection of drag and drop object puzzles designed especially for children. Each mini-game challenges your child to locate and manipulate shapes 🎮🔍.</p>

                <h3>🎨 Colouring Games:</h3>
                <p>Colouring Games is filled with fun, colourful, and creative drawing and painting tools that help kids of all ages enjoy creating art on your mobile device 🎨🖍️.</p>

                <p>Download <strong>Learning Farm Animals</strong> today and help your kids discover the fun of learning with farm animals! 🌟</p>
            </div>';

            $category = 'Learning'; 
            $bannerImage = asset('assets/img/games/006.png');

        }elseif($gameSlug == 'snakes'){
            $name = 'Snakes';
            $headerShortContent = '🐍 Classic Snake Game (1997): Grow Your Snake, Avoid Obstacles!';
            $content .= '<div class="portfolio-description">
            <h2>🐍 The Classic Snake Game: A Nostalgic Journey 🎮</h2>
        
            <h3>📖 About the Game:</h3>
            <p>The original <strong>Snake</strong> game was released in 1997 for Nokia devices, and quickly became a staple during the early days of mobile phones. 📱</p>
        
            <p>In the game, players control a snake 🐍 that grows longer as it eats food 🍎, while avoiding running into walls or its own tail. 🚧</p>
        
            <h3>🎮 How to Play:</h3>    
            <ul>
                <li>🕹️ <strong>Control the Snake:</strong> Move the snake in four directions to chase down the food.</li>
                <li>🍎 <strong>Eat and Grow:</strong> Each time the snake eats a piece of food, it grows longer!</li>
                <li>⚠️ <strong>Avoid Obstacles:</strong> The game ends when the snake either moves off the screen or into its own tail. Be careful!</li>
            </ul>
        
            <h3>🌟 The Goal:</h3>
            <p>Your objective? Make the snake as large as possible before crashing! The longer you survive, the harder the game becomes. 💪</p>
        
            <p>Relive the nostalgia of the 90s and download a modern version of this iconic game. Can you master the snake and reach the highest score? 🏆</p>
        </div>';
                    $category = 'Puzzle';
                    $bannerImage = asset('assets/img/games/007.png');

        }
        elseif ($gameSlug == 'filltheline') {
            $name = 'Fill The Line';
            $headerShortContent = 'Ignite your mind with the electrifying <strong>Fill The Line</strong> puzzle game – the ultimate brain training experience that\'s not just addictive but completely free to play! 🧩 Whether you\'re conquering your daily commute or winding down before sleep, this brain-teasing game is your passport to a world of thrilling mental challenges. 🧠✨';
            $content .= '<div class="portfolio-description">
                <h2>⚡ Fill The Line: The Ultimate Brain Training Puzzle Game 🧠🎮</h2>

                <h3>📖 About the Game:</h3>

                <p>As you play, your brain comes alive, providing a riveting yet relaxing experience that\'ll keep you hooked during every break. 🕹️ The rules? They\'re as straightforward as they come – fill in all the blocks using just one line. Encounter a puzzle that feels as challenging as climbing Everest? Fear not! Free hints are your trusty sidekick, ready to swoop in and save the day. 💡</p>

                <p>It all started with a puzzle centred around the Pregel River. Beyond the sheer fun and addictive nature of the game, these puzzles stimulate mathematical thinking, supercharging work efficiency, and acting as a secret weapon against mental ageing. 🧠✨</p>

                <h3>💡 Key Features:</h3>
                <ul>
                    <li>🧩 <strong>Sharpen Your Mind:</strong> A connect-the-block-style one-line brain training puzzle game that’s simple but addictive, and completely free to play.</li>
                    <li>⚡ <strong>Free Hints:</strong> Use hints when you hit a difficult puzzle. Hints are always free, of course!</li>
                    <li>🎯 <strong>Four Difficulty Levels:</strong> With 4 levels of difficulty and a whopping 2,000 puzzles, there’s always a challenge waiting for you. But don’t get too cozy – the puzzles get harder as you go along!</li>
                    <li>🧠 <strong>Train Your Brain:</strong> These one-line puzzles, originating in the early 18th century, are designed to stimulate mathematical thinking, improve work efficiency, and prevent mental ageing.</li>
                </ul>

                <h3>🌟 Why Play "Fill The Line"?</h3>
                <p>Don’t waste a moment on lacklustre games – download <strong>Fill The Line</strong> now and embark on an electrifying adventure that will not only entertain but also challenge you in ways you never thought possible! 🌟🔥</p>

                <p>With mechanics that are easy to learn, stress-relieving action, and infinite levels that get progressively harder, this game is engineered to keep you on the edge of your seat. 🎮 Move wisely, crack the puzzles, and ascend to the glorious title of one-line puzzle master! 🧠🚀</p>

                <p>Download <strong>Fill The Line</strong> now and dive into a world where time flies and brainpower reigns supreme! 🎯</p>

                <h3>🎮 Simple Rules, Complex Fun:</h3>
                <p>Just fill in all the blocks using only one line. 🧩 It’s that simple. Stuck on a tough puzzle? Use hints to solve the trickiest puzzles, and continue your brain-training adventure.</p>

                <p>Whether math is your bane or your forte, this game will get you hooked on its challenges! It\'s time to test your skills with over 2,000 puzzles, starting from the simplest ones to progressively harder brain teasers! 🧠✨</p>
            </div>';
            $category = 'Puzzle Game';
            $bannerImage = asset('assets/img/games/008.png');


        }
        elseif ($gameSlug == 'bouncingball') {
            $name = 'Bouncing Ball';
            $headerShortContent = 'Aim at breaking all bricks in one shot: swipe your finger and throw balls. 🎯';

            $content .= '<div class="portfolio-description">
                <h2>🎯 Wall Breaker: Bouncing Ball Challenge! 🏐</h2>
            
                <h3>🕹️ How to Play:</h3>
                <p>🎯 Make them roll among the bricks. Hit items to make extra balls or double-sized balls. ⚡ Prevent the bricks from reaching the check-line!</p>
            
                <h3>💎 Features:</h3>
                <ul>
                    <li>⚙️ <strong>Smooth and precise ball-bouncing physics:</strong> Enjoy a satisfying gameplay experience with smooth and precise ball physics.</li>
                    <li>🏐 <strong>Bouncing Action:</strong> Hit the ball on the wall, block, and feel the ball\'s bouncy engine in action!</li>
                    <li>🔋 <strong>Power-ups:</strong> Different powers have been added, including horizontal and vertical lines when you hit a special power.</li>
                    <li>➕ <strong>Extra Balls:</strong> Earn extra balls by hitting the 1+ power block. More balls, more fun!</li>
                    <li>⚡ <strong>Sizer Power:</strong> Increase your hitting power by +1 with the sizer power-up.</li>
                    <li>🎨 <strong>Customizable Balls:</strong> You can change the look of your balls for a more personalized gameplay experience.</li>
                    <li>💾 <strong>Automatic Progress Save:</strong> Your game progress is saved automatically, so you never lose your place.</li>
                    <li>♾️ <strong>Endless Mode:</strong> Enjoy endless fun with this game mode, perfect for hours of entertainment!</li>
                    <li>🌟 <strong>Free to Play:</strong> Wall Breaker Balls is suitable for all ages and completely free to play!</li>
                </ul>
            
                <p>Now become an expert in controlling the Wall Breaker Balls! 🏆 Download today and start breaking those walls! 🚀</p>
            </div>';
            $category = 'Puzzle Game';
            $bannerImage = asset('assets/img/games/009.png');

        }
        elseif ($gameSlug == 'wordconnect') {
            $name = 'Word Scramble Puzzle';
            $headerShortContent = 'Get ready for a thrilling word puzzle adventure! Connect letters, form words, and unlock levels. 🧠';
            
            $content .= '<div class="portfolio-description">
                <h2>🧩 Word Scramble Puzzle: A Brain-Teasing Word Adventure! 🔠</h2>
            
                <h3>🕹️ How to Play:</h3>
                <p>🔗 Connect letters on the table to form hidden words and unlock new levels. Use hints and power-ups to overcome challenging puzzles!</p>
            
                <h3>💎 Features:</h3>
                <ul>
                    <li>🧠 <strong>Endless Puzzle Fun:</strong> Enjoy countless levels and word combinations, ensuring non-stop fun!</li>
                    <li>🔍 <strong>Challenging Gameplay:</strong> Test your brainpower with puzzles that progressively increase in difficulty.</li>
                    <li>🎨 <strong>Beautiful Graphics:</strong> Immerse yourself in stunning, visually appealing game design.</li>
                    <li>🚀 <strong>Power-Ups & Hints:</strong> Struggling with a tough level? Use power-ups and hints to help you progress faster.</li>
                    <li>👤 <strong>Personalized Profile:</strong> Create your unique profile, update your name and avatar, and track your progress over time.</li>
                    <li>🎰 <strong>Spin and Win:</strong> Try your luck with the daily spin wheel to earn coins and unlock special rewards.</li>
                    <li>💰 <strong>In-App Purchases:</strong> Purchase additional coins to keep the fun going and access exclusive content.</li>
                </ul>
            
                <p>Start your word puzzle journey today with Word Scramble Puzzle! 🎉 Download now and put your vocabulary skills to the ultimate test! 🚀</p>
            </div>';
            $category = 'Puzzle Game';
            $bannerImage = asset('assets/img/games/010.png');

        }
        elseif ($gameSlug == 'roulettecasino') {
            $name = 'Roulette Casino';
            $headerShortContent = 'Step into the world of luxury and high-stakes excitement with the premier casino app, Roulette Casino. 🎲';
            
            $content .= '<div class="portfolio-description">
                <h2>🎲 Roulette Casino: The Ultimate High-Stakes Experience! 💎</h2>
            
                <h3>🕹️ How to Play:</h3>
                <p>🎯 Spin the roulette wheel, place your bets, and watch the action unfold in a sophisticated virtual casino. Whether you\'re betting on red or black, odd or even, Roulette Casino offers endless thrills and opportunities to win big.</p>
            
                <h3>💎 Features:</h3>
                <ul>
                    <li>🌟 <strong>Unmatched Gaming Excellence:</strong> Immerse yourself in a world where gaming excellence is the norm, with the finest casino entertainment at your fingertips.</li>
                    <li>🎲 <strong>Roulette Redefined:</strong> Experience roulette like never before, with captivating graphics and smooth gameplay designed for modern players.</li>
                    <li>💎 <strong>Luxurious Casino Atmosphere:</strong> Indulge in a high-end virtual casino environment, where every detail is designed to enhance your gaming experience.</li>
                    <li>📈 <strong>Strategic Gameplay:</strong> Employ tactical betting strategies and put your skills to the test with every spin of the wheel.</li>
                    <li>🚀 <strong>Best Casino App:</strong> Recognized as the leading casino app, enjoy a smooth and intuitive interface that ensures a premium gaming experience.</li>
                    <li>🤑 <strong>Big Wins Await:</strong> Embark on a thrilling journey where big wins are not just possible, but highly achievable with every spin!</li>
                </ul>
            
                <h3>🌐 Why Choose Roulette Casino?</h3>
                <ul>
                    <li>🔝 <strong>Cutting-Edge Technology:</strong> Powered by the latest technology, Roulette Casino guarantees a sophisticated, reliable, and seamless gaming experience.</li>
                    <li>🌈 <strong>Variety of Games:</strong> While roulette is the crown jewel, explore a wide selection of other exciting casino games all in one app.</li>
                    <li>🔐 <strong>Safe and Secure:</strong> With top-notch security measures in place, enjoy your gaming experience with complete peace of mind.</li>
                </ul>
            
                <p>Join Roulette Casino today and experience the perfect combination of luxury, strategy, and big wins! 🚀</p>
            </div>';
            $category = 'Casino Game';
            $bannerImage = asset('assets/img/games/011.png');

        }
        else{
            return view('web.404');
        }
        return view('web.gallery-single', compact( 'gameSlug','name', 'content' , 'category' , 'headerShortContent' , 'bannerImage'));   
    }
 
    public function playGameIfream() {
        $gameSlug = basename($_SERVER['REQUEST_URI']);
        if ( $gameSlug == 'blitz21') {
            $gameUrl = 'https://finixgamesstudio.com/webgl-21-blitz/';
        }elseif($gameSlug == 'blackjack21'){
             $gameUrl = 'https://finixgamesstudio.com/webgl-21-black-jack/';
        }elseif($gameSlug == 'callbreak'){
             $gameUrl = 'https://finixgamesstudio.com/webgl-call-break/';
        }elseif($gameSlug == 'spades'){
            $gameUrl = 'https://finixgamesstudio.com/webgl-spades/';
        }elseif($gameSlug == 'tablaclassics'){
             $gameUrl = '#';
        }elseif($gameSlug == 'learnframanimal'){
             $gameUrl = 'https://finixgamesstudio.com/webgl-learning-animal/';
        }elseif($gameSlug == 'snakes'){
             $gameUrl = 'https://finixgamesstudio.com/webgl-snake-offline/';
        }elseif ($gameSlug == 'filltheline') {
            $gameUrl = '#';
        }elseif ($gameSlug == 'bouncingball') {
            $gameUrl = '#';
        }elseif ($gameSlug == 'wordconnect') {
            $gameUrl = 'https://finixgamesstudio.com/webgl-word-connect/';
        }elseif ($gameSlug == 'roulettecasino') {
            $gameUrl = 'https://finixgamesstudio.com/webgl-roulette/';
        }else{
            return view('web.404');
        }
        return view('web.ifream' , compact('gameUrl'));
    }
}