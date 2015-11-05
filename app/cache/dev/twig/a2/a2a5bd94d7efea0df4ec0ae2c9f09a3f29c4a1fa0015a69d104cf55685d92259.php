<?php

/* layout.html.twig */
class __TwigTemplate_fd03d9e93b741214716c7ec634fae22c3f6542764380028691dcbc54f19da2a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20193ea82d58953e1092d769e83663d5444aa431f5b5567dac779e4e83377496 = $this->env->getExtension("native_profiler");
        $__internal_20193ea82d58953e1092d769e83663d5444aa431f5b5567dac779e4e83377496->enter($__internal_20193ea82d58953e1092d769e83663d5444aa431f5b5567dac779e4e83377496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_20193ea82d58953e1092d769e83663d5444aa431f5b5567dac779e4e83377496->leave($__internal_20193ea82d58953e1092d769e83663d5444aa431f5b5567dac779e4e83377496_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26d86d6adcee3965987666d5207df47d7050708e8bdbe9d8e6cecbb1e6ede497 = $this->env->getExtension("native_profiler");
        $__internal_26d86d6adcee3965987666d5207df47d7050708e8bdbe9d8e6cecbb1e6ede497->enter($__internal_26d86d6adcee3965987666d5207df47d7050708e8bdbe9d8e6cecbb1e6ede497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignación de tareas";
        
        $__internal_26d86d6adcee3965987666d5207df47d7050708e8bdbe9d8e6cecbb1e6ede497->leave($__internal_26d86d6adcee3965987666d5207df47d7050708e8bdbe9d8e6cecbb1e6ede497_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba546e46bb76f7113bacf738945cd4b9415b788a9b5c46fd31d442d5feddeff0 = $this->env->getExtension("native_profiler");
        $__internal_ba546e46bb76f7113bacf738945cd4b9415b788a9b5c46fd31d442d5feddeff0->enter($__internal_ba546e46bb76f7113bacf738945cd4b9415b788a9b5c46fd31d442d5feddeff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"></link>
        ";
        
        $__internal_ba546e46bb76f7113bacf738945cd4b9415b788a9b5c46fd31d442d5feddeff0->leave($__internal_ba546e46bb76f7113bacf738945cd4b9415b788a9b5c46fd31d442d5feddeff0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_59c34d8ae34e0ab9dbc41979c3d6bc8b6e733979a3fad08905ca83aa09eb79ee = $this->env->getExtension("native_profiler");
        $__internal_59c34d8ae34e0ab9dbc41979c3d6bc8b6e733979a3fad08905ca83aa09eb79ee->enter($__internal_59c34d8ae34e0ab9dbc41979c3d6bc8b6e733979a3fad08905ca83aa09eb79ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_59c34d8ae34e0ab9dbc41979c3d6bc8b6e733979a3fad08905ca83aa09eb79ee->leave($__internal_59c34d8ae34e0ab9dbc41979c3d6bc8b6e733979a3fad08905ca83aa09eb79ee_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bb58219d3bb44dcbde04c8284affb43674d11c9bd5313ada08c688e4ca81cbb = $this->env->getExtension("native_profiler");
        $__internal_5bb58219d3bb44dcbde04c8284affb43674d11c9bd5313ada08c688e4ca81cbb->enter($__internal_5bb58219d3bb44dcbde04c8284affb43674d11c9bd5313ada08c688e4ca81cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5bb58219d3bb44dcbde04c8284affb43674d11c9bd5313ada08c688e4ca81cbb->leave($__internal_5bb58219d3bb44dcbde04c8284affb43674d11c9bd5313ada08c688e4ca81cbb_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Asignación de tareas{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/style.css') }}"></link>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
