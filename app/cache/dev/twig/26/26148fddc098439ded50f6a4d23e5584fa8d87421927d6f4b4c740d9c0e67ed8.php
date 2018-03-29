<?php

/* HelloBundle:Hello:Hello.html.twig */
class __TwigTemplate_44876c62a8c036fffde25b05f3e17959186a65898bcd3d44b94df785979d8e5c extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HelloBundle:Hello:Hello.html.twig"));

        // line 2
        echo "<html>
<body>
 ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["welcome"]) ? $context["welcome"] : $this->getContext($context, "welcome")), "html", null, true);
        echo "!
</body>
</htm";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "HelloBundle:Hello:Hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
<html>
<body>
 {{ welcome }}!
</body>
</htm", "HelloBundle:Hello:Hello.html.twig", "C:\\xamppp\\htdocs\\Symfony 2.8\\src\\HelloBundle/Resources/views/Hello/Hello.html.twig");
    }
}
