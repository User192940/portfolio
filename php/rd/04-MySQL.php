<?php
ini_set("date.timezone", "America/Chicago");

# Page specific variables.
$nav = "assignments";
$title_section = "Research Assignments";
# Create a human friendly name based on file name.
include("../includes/title-page-name.php");

# The header section of the layout.
include("../includes/header.php");
?>
    <main>
    <h1> MySQL </h1>
    <p><a href="https://dev.mysql.com/doc/">MySQL Documentation</a>
</p>
        <p> MySQL does many things that make it one of the most used databases. It is hundreds of times faster than Amazon RDS and Aurora. Additionally, it is lower in cost for ownership than other competitors. 
</p>
        <p>According to a survey by StackOverflow, MySQL was the most popular database in use by professionals from 2020-2021. MySQL is a structured/semi-structured DBMS that has a mild learning curve. It is very popular right now and boasts a high-speed environment. Compared to other DBMS it is easier to learn and can be cheaper to use. 
</p>
        <p> MySQL is the second most used database in the world according to statista.com. Oracle has a score of 1260, whereas MySQL is at a solid 1202, followed by Microsoft SQL at 945. 
</p>
<p> MySQL is a database management system. It has a moderate learning curve and is used by companies such as Facebook, Twitter, and Verizon. MySQL has relatively low costs to run and fast speeds. It is the second most used database in the world right now and it seems like it won't fade away anytime soon.   </p>
        <p> References:<br>
        <a href="https://www.statista.com/statistics/809750/worldwide-popularity-ranking-database-management-systems/#:~:text=As%20of%20August%202022%2C%20the,rounded%20out%20the%20top%20three.">Statista.com</a><br>
        <a href="https://www.mysql.com/">https://www.mysql.com/</a><br>
        <a href="https://www.altexsoft.com/blog/business/comparing-database-management-systems-mysql-postgresql-mssql-server-mongodb-elasticsearch-and-others/">altexsoft.com</a>
</p> 
</main>
<?php
include("../includes/sidebar.php");
include("../includes/footer.php");
?>  