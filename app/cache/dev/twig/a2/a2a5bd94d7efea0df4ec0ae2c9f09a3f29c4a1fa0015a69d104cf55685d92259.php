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
        $__internal_00f10a06e6c27c51529571c77fe1be63a1a0bf97f679089a73c2e988c8a5fa59 = $this->env->getExtension("native_profiler");
        $__internal_00f10a06e6c27c51529571c77fe1be63a1a0bf97f679089a73c2e988c8a5fa59->enter($__internal_00f10a06e6c27c51529571c77fe1be63a1a0bf97f679089a73c2e988c8a5fa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_00f10a06e6c27c51529571c77fe1be63a1a0bf97f679089a73c2e988c8a5fa59->leave($__internal_00f10a06e6c27c51529571c77fe1be63a1a0bf97f679089a73c2e988c8a5fa59_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89c0147e913677d7f8fdffff2582370e1a1711dc7d149e277f064bfc37f6f901 = $this->env->getExtension("native_profiler");
        $__internal_89c0147e913677d7f8fdffff2582370e1a1711dc7d149e277f064bfc37f6f901->enter($__internal_89c0147e913677d7f8fdffff2582370e1a1711dc7d149e277f064bfc37f6f901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignación de tareas";
        
        $__internal_89c0147e913677d7f8fdffff2582370e1a1711dc7d149e277f064bfc37f6f901->leave($__internal_89c0147e913677d7f8fdffff2582370e1a1711dc7d149e277f064bfc37f6f901_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9dea945be8e84337a3c50131f6929d89970374697749ea5230aefde530d31479 = $this->env->getExtension("native_profiler");
        $__internal_9dea945be8e84337a3c50131f6929d89970374697749ea5230aefde530d31479->enter($__internal_9dea945be8e84337a3c50131f6929d89970374697749ea5230aefde530d31479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\"></link>
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"></link>
        ";
        
        $__internal_9dea945be8e84337a3c50131f6929d89970374697749ea5230aefde530d31479->leave($__internal_9dea945be8e84337a3c50131f6929d89970374697749ea5230aefde530d31479_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_59f4ae8c5f6f327d1b267288bb5b31540d69acf3c285b6616be8c738019cfa38 = $this->env->getExtension("native_profiler");
        $__internal_59f4ae8c5f6f327d1b267288bb5b31540d69acf3c285b6616be8c738019cfa38->enter($__internal_59f4ae8c5f6f327d1b267288bb5b31540d69acf3c285b6616be8c738019cfa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_59f4ae8c5f6f327d1b267288bb5b31540d69acf3c285b6616be8c738019cfa38->leave($__internal_59f4ae8c5f6f327d1b267288bb5b31540d69acf3c285b6616be8c738019cfa38_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_534d98c27c0a8e212cc576ef8788690e172ca4f0296c1e4664e16afc7e90120d = $this->env->getExtension("native_profiler");
        $__internal_534d98c27c0a8e212cc576ef8788690e172ca4f0296c1e4664e16afc7e90120d->enter($__internal_534d98c27c0a8e212cc576ef8788690e172ca4f0296c1e4664e16afc7e90120d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_534d98c27c0a8e212cc576ef8788690e172ca4f0296c1e4664e16afc7e90120d->leave($__internal_534d98c27c0a8e212cc576ef8788690e172ca4f0296c1e4664e16afc7e90120d_prof);

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
        return array (  118 => 18,  113 => 17,  107 => 16,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Asignación de tareas{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}"></link>*/
/*             <link rel="stylesheet" href="{{ asset('public/css/style.css') }}"></link>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             {{ include('menu.html.twig')}}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
