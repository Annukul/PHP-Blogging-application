<?php
require './inc/config.php';
require './inc/db.php';

?>

<?php include_once './inc/header.php'; ?>
<?php include_once './inc/navbar.php'; ?>


<div class="about">
    <h1 class="about-h1">About Me</h1>
    <div class="about-inside">
        <img src="./images/author.jpg" alt="Author" class="about-img" width="150px" height="120px">
        <h3 class="about-name">Annukul</h3>
        <p class="about-p">
            Tumbleweed is the final chapter in the life cycle of Russian thistle (an umbrella term that includes Salsola tragus and several other species), a plant introduced to America from Eurasia roughly two centuries ago. When the plants mature, a part of them breaks off and blows away, sowing seeds as it somersaults. Tumbleweeds are commonly seen on American highways, and they snowed in this stretch of State Route 240 back in December; they had to be cleared away with snowplows. But this was something else. “I’ve lived in Wyoming and Idaho and Utah, and the High Desert of California, so I’m not a stranger to tumbleweeds,” McKnight says. “I’m not a stranger to dust devils, either, but I’ve never, ever in my life seen two of them merge together and then come straight at my face.” McKnight tweeted that the sight looked like a “tumbleweed tornado.”

            A few minutes before the bizarre sight, McKnight saw a lone tumbleweed scuttling down the road; he thought it looked cute, and kept driving. “Then I saw kind of a mass of them coming—maybe 15—and I was like, ‘Oh, that’s kinda cool. There’s more.’” He slowed down a little, but pressed on. Then he and Bessie crested a small hill. “I saw a tumbledevil, a tumblenado, whatever you wanna call it, forming on the side.” It seemed like a good time to stop. “I was like, ‘Okay, hell no. I’m not going to be driving into that thing.”
            McKnight put the car in park but kept the engine on, and he propped his cell phone up against the dashboard. He started filming a video, and within seconds, tumbleweeds were battering the windshield, just a few inches from his face. In the recording, they sound like noisy, flapping wings, and McKnight says it was even louder in person. The video also features a little creaking, as McKnight steadied himself to get a good angle—but there aren’t any shrieks. “I wasn’t nervous as they started hitting me,” he says. “I was like, ‘Okay, this is kinda crazy,’ but at the same time, I had my journalist I’m-just-gonna-be-calm-and-see-this-through type of demeanor.”

            It was over in five or 10 seconds, he says. When the storm passed, he looked behind him and saw it clearing the fence onto the Hanford Nuclear Reservation, which once produced plutonium for the bomb that detonated over Nagasaki in 1945. By the time the “tornado” blew onto the grounds of the old facility, it had lost some steam. “I think it tapered off pretty quickly,” McKnight says.
        </p>
    </div>
    <hr>
    

    <h1 class="mytravels-h1">My Travels</h1>
    <div class="my-travels">
        <div class="up">
            <div class="img-one">
                <img src="./images/one.jpg" alt="One" class="img-one" width="300px" height="170px">
                <span class="span"><a href="<?php echo ROOT_URL; ?>images\one.jpg" target="_blank">View Image</a></span>
            </div>

            <div class="img-two">
                <img src="./images/two.jpeg" alt="Two" class="img-two" width="300px" height="170px">
                <span class="span"><a href="<?php echo ROOT_URL; ?>images\two.jpeg" target="_blank">View Image</a></span>
            </div>

            <div class="img-three">
                <img src="./images/three.jpg" alt="Three" class="img-three" width="300px" height="170px">
                <span class="span"><a href="<?php echo ROOT_URL; ?>images\three.jpg" target="_blank">View Image</a></span>
            </div>
        </div>

        <div class="down">
            <div class="img-four">
                <img src="./images/four.jpg" alt="Four" class="img-one" width="300px" height="170px">
                <span class="span"><a href="<?php echo ROOT_URL; ?>images\four.jpg" target="_blank">View Image</a></span>
            </div>

            <div class="img-five">
                <img src="./images/five.jpg" alt="five" class="img-five" width="300px" height="170px">
                <span class="span"><a href="<?php echo ROOT_URL; ?>images\five.jpg" target="_blank">View Image</a></span>
            </div>

            <div class="img-six">
                <img src="./images/six.jpg" alt="six" class="img-six" width="300px" height="170px">
                <span class="span"><a href="<?php echo ROOT_URL; ?>images\six.jpg" target="_blank">View Image</a></span>
            </div>
        </div>
    </div>
    <hr>
</div>



<?php include_once './inc/footer.php'; ?>
