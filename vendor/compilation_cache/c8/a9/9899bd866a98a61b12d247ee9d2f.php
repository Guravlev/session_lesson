<?php

/* form.html */
class __TwigTemplate_c8a99899bd866a98a61b12d247ee9d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>My form</title>
</head>
<body>
    <form action=\"\" method=\"post\">
        <input type=\"text\" name=\"login\">
        <label for=\"login\">Login</label>
        <br>
        <input type=\"password\" name=\"password\">
        <label for=\"password\">Password</label>
        <br>
        <button type=\"submit\">Enter</button>
        <a href='logout.php'>Logout</a>
    </form>
    <?php echo \$credentials['login']; ?>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "form.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
