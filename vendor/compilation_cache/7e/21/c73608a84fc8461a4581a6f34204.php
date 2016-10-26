<?php

/* login_true.html */
class __TwigTemplate_7e21c73608a84fc8461a4581a6f34204 extends Twig_Template
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
    <title>Your login success</title>
</head>
<body>

       <div>
           ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["name"]) ? $context["name"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["names"]) {
            // line 11
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["names"]) ? $context["names"] : null), "login"), "html", null, true);
            echo "</p>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['names'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "       </div>

    <table border = '1'>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["times"]) ? $context["times"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "        </tbody>
    </table>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login_true.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  56 => 19,  53 => 18,  49 => 17,  43 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }
}
