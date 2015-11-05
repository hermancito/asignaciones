<?php

/* base.html.twig */
class __TwigTemplate_65f1d69c8d9c9c71a02e4fd4b2ddafbac6b5998617d1d07c33960aef2cd57e0e extends Twig_Template
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
        $__internal_f8380b6f0affbda3f8ad1c9352ef9750f9829f4da8fb6c157845407875ed2080 = $this->env->getExtension("native_profiler");
        $__internal_f8380b6f0affbda3f8ad1c9352ef9750f9829f4da8fb6c157845407875ed2080->enter($__internal_f8380b6f0affbda3f8ad1c9352ef9750f9829f4da8fb6c157845407875ed2080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f8380b6f0affbda3f8ad1c9352ef9750f9829f4da8fb6c157845407875ed2080->leave($__internal_f8380b6f0affbda3f8ad1c9352ef9750f9829f4da8fb6c157845407875ed2080_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36777498a82a601dfee2a0a66abd21572cb5dce540af39044e4224962bb2e32a = $this->env->getExtension("native_profiler");
        $__internal_36777498a82a601dfee2a0a66abd21572cb5dce540af39044e4224962bb2e32a->enter($__internal_36777498a82a601dfee2a0a66abd21572cb5dce540af39044e4224962bb2e32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_36777498a82a601dfee2a0a66abd21572cb5dce540af39044e4224962bb2e32a->leave($__internal_36777498a82a601dfee2a0a66abd21572cb5dce540af39044e4224962bb2e32a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dc644a2b88c440320eef8c51ad7bf0b8bdf1b408a1528e45520f21c635bd13a = $this->env->getExtension("native_profiler");
        $__internal_0dc644a2b88c440320eef8c51ad7bf0b8bdf1b408a1528e45520f21c635bd13a->enter($__internal_0dc644a2b88c440320eef8c51ad7bf0b8bdf1b408a1528e45520f21c635bd13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0dc644a2b88c440320eef8c51ad7bf0b8bdf1b408a1528e45520f21c635bd13a->leave($__internal_0dc644a2b88c440320eef8c51ad7bf0b8bdf1b408a1528e45520f21c635bd13a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8792c604c526cf32b0f1f706f5c663b61456464255abdb6a8925fc33090d8f7 = $this->env->getExtension("native_profiler");
        $__internal_f8792c604c526cf32b0f1f706f5c663b61456464255abdb6a8925fc33090d8f7->enter($__internal_f8792c604c526cf32b0f1f706f5c663b61456464255abdb6a8925fc33090d8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f8792c604c526cf32b0f1f706f5c663b61456464255abdb6a8925fc33090d8f7->leave($__internal_f8792c604c526cf32b0f1f706f5c663b61456464255abdb6a8925fc33090d8f7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7857c023ad8dcd096cf4d53e200a588c7b25977828fa17b7a1a90218546b8c0 = $this->env->getExtension("native_profiler");
        $__internal_b7857c023ad8dcd096cf4d53e200a588c7b25977828fa17b7a1a90218546b8c0->enter($__internal_b7857c023ad8dcd096cf4d53e200a588c7b25977828fa17b7a1a90218546b8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b7857c023ad8dcd096cf4d53e200a588c7b25977828fa17b7a1a90218546b8c0->leave($__internal_b7857c023ad8dcd096cf4d53e200a588c7b25977828fa17b7a1a90218546b8c0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
