<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/courses.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mentors</title>
</head>

<body>
    <!-- Navbar -->
    <?php include('../nav.php') ?>
    <div class="main">
        <h1>Our Mentors</h1>
        <!-- First Row -->
        <div class="row center" style="flex-grow: 0;">
            <div class="card" onclick="window.location.href = '../index.php';">
                <div class="card-image">
                    <img src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortWaved&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=GraphicShirt&clotheColor=Black&graphicType=Pizza&eyeType=Happy&eyebrowType=UpDown&mouthType=Smile&skinColor=Light" alt="" style="object-fit: contain;">
                </div>
                <div class="card-text">
                    <h2>Dave Sunny</h2>
                    <p>Software Engineer with internship and workplace experience capable of managing solo projects and delivering completed products in a team.</p>
                </div>
                <div class="card-stats" style="grid-template-columns: 1fr">
                    <div class="stat">
                        <div class="value">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="type">Rating</div>
                    </div>
                </div>

            </div>
            <div class="card" onclick="window.location.href = '../index.php';">
                <div class="card-image">
                    <img src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription01&hairColor=Black&facialHairType=MoustacheMagnum&facialHairColor=Black&clotheType=ShirtCrewNeck&clotheColor=PastelRed&eyeType=Wink&eyebrowType=Default&mouthType=Twinkle&skinColor=Light" alt="" style="object-fit: contain;">
                </div>
                <div class="card-text">
                    <h2>Ajish Sharan</h2>
                    <p>Engineer, researcher and entrepreneur. Passionate about leveraging data to build intelligent systems that are available to masses.</p>
                </div>
                <div class="card-stats" style="grid-template-columns: 1fr">
                    <div class="stat">
                        <div class="value">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="type">Rating</div>
                    </div>
                </div>

            </div>
            <div class="card" onclick="window.location.href = '../index.php';">
                <div class="card-image">
                    <img src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairFrizzle&accessoriesType=Prescription01&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=PastelBlue&eyeType=Default&eyebrowType=Default&mouthType=Smile&skinColor=Light" alt="" style="object-fit: contain;">
                </div>
                <div class="card-text">
                    <h2>Arun Sam</h2>
                    <p>Seasoned UX professional skilled at understanding user needs and translating even the most complex of design problems into a user-friendly solution.</p>
                </div>
                <div class="card-stats" style="grid-template-columns: 1fr">
                    <div class="stat">
                        <div class="value">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="type">Rating</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include('../footer.php') ?>
</body>

</html>