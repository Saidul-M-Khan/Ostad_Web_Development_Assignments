<!-- Task 1 -->
<br><br><strong>Task-1</strong><br>
<form action="<?php 
echo $_SERVER['PHP_SELF']; 
?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <input type="submit" name="submit" id="submit" value="Submit">
</form>

<?php
// Task 2
class Person {
    private $name, $email;
    public function __construct( $name, $email ) {
        $this->name  = $name;
        $this->email = $email;
    }

    public function setName( $name ) {
        $this->name = $name;
    }

    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

}
$person = new Person( "John", "john@gmail.com" );
echo "<br><br><strong>Task-2</strong><br>";
echo "Name: " . $person->getName() .   "<br>";
echo "Email: " . $person->getEmail() . "<br>";

// Task 3
if ( isset($_POST['submit']) ) {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $person = new Person( $name, $email );
    $person->setName( $name );
    $person->setEmail( $email );
    echo "<br><br><strong>Task-3</strong><br>";
    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail() . "<br>";
}

?>