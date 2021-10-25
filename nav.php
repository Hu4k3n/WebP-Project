<nav>
    <div class="row center">
        <a href="/index.php">Home</a>
        <a href="#" onclick="window.scrollBy(0,document.body.scrollHeight)">About</a>
        <a href="/pages/courses.php">Courses</a>
        <a href="/pages/teachers.php">Mentors</a>
        <a href="#" onclick="window.scrollBy(0,document.body.scrollHeight)">Contact</a>
    </div>
    <div class="usernav">
        <?php 
        if(isset($_SESSION['username'])):?>
            <a href="#"aria-haspopup="true" onclick="openModal()"> <?php echo $_SESSION['username']; ?></a>
        <div class="mask" role="dialog" id="mask"></div>
        <div class="modal" role="alert">
            <button class="close" role="button" onclick="closeModal()">
                <i class="fa fa-close" style="position:relative;top:0px;left:0px;"></i>
            </button>
        <h1> Hello there <?php echo $_SESSION['username'] ?>!</h1>
            <table>
                <thead class="thead">
                    <tr>
                        <th class="th"> Registered Users </th>
                    <tr>
                </thead>
                <tbody class="tbody">
                    <?php 
                        $user_list_query = "SELECT * FROM users";
                        $result = mysqli_query($db, $user_list_query);
                        $users = mysqli_fetch_array($result);

                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr class=\"tr\"><td>" . $row['username'] . "</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        <div>
            <button class="logout" onclick="window.location.href = 'logout.php';">Logout</button>
        </div>
        
        </div>
        
        <?php endif; ?>
    </div>
</nav>