<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_8dfd624be10d2b1cea118df863dca84277c57beb493a2a9c820be501c9411c47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6026b1939a5659663f83f8f6a5dbbe219e8909ecfd39fb1477dca26d87c21f80 = $this->env->getExtension("native_profiler");
        $__internal_6026b1939a5659663f83f8f6a5dbbe219e8909ecfd39fb1477dca26d87c21f80->enter($__internal_6026b1939a5659663f83f8f6a5dbbe219e8909ecfd39fb1477dca26d87c21f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6026b1939a5659663f83f8f6a5dbbe219e8909ecfd39fb1477dca26d87c21f80->leave($__internal_6026b1939a5659663f83f8f6a5dbbe219e8909ecfd39fb1477dca26d87c21f80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_687ac571d173005859bcb8d2c77d331d612dc7049545763d83c44ebf6a92790f = $this->env->getExtension("native_profiler");
        $__internal_687ac571d173005859bcb8d2c77d331d612dc7049545763d83c44ebf6a92790f->enter($__internal_687ac571d173005859bcb8d2c77d331d612dc7049545763d83c44ebf6a92790f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_687ac571d173005859bcb8d2c77d331d612dc7049545763d83c44ebf6a92790f->leave($__internal_687ac571d173005859bcb8d2c77d331d612dc7049545763d83c44ebf6a92790f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c62ec9a74193423fb9d89534a5a613acf88d8aaf8bc40fee885985fce8a7a4d = $this->env->getExtension("native_profiler");
        $__internal_1c62ec9a74193423fb9d89534a5a613acf88d8aaf8bc40fee885985fce8a7a4d->enter($__internal_1c62ec9a74193423fb9d89534a5a613acf88d8aaf8bc40fee885985fce8a7a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1c62ec9a74193423fb9d89534a5a613acf88d8aaf8bc40fee885985fce8a7a4d->leave($__internal_1c62ec9a74193423fb9d89534a5a613acf88d8aaf8bc40fee885985fce8a7a4d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_93417d494fbf77d2fcc9e3b6e29826790c241461bc846d0ed6f4cec8a1371f0b = $this->env->getExtension("native_profiler");
        $__internal_93417d494fbf77d2fcc9e3b6e29826790c241461bc846d0ed6f4cec8a1371f0b->enter($__internal_93417d494fbf77d2fcc9e3b6e29826790c241461bc846d0ed6f4cec8a1371f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_93417d494fbf77d2fcc9e3b6e29826790c241461bc846d0ed6f4cec8a1371f0b->leave($__internal_93417d494fbf77d2fcc9e3b6e29826790c241461bc846d0ed6f4cec8a1371f0b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_cd6df4941eb9e32950611029a50293e2e3c4e47f19f535ac1c10dc849b2b5563 = $this->env->getExtension("native_profiler");
        $__internal_cd6df4941eb9e32950611029a50293e2e3c4e47f19f535ac1c10dc849b2b5563->enter($__internal_cd6df4941eb9e32950611029a50293e2e3c4e47f19f535ac1c10dc849b2b5563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cd6df4941eb9e32950611029a50293e2e3c4e47f19f535ac1c10dc849b2b5563->leave($__internal_cd6df4941eb9e32950611029a50293e2e3c4e47f19f535ac1c10dc849b2b5563_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
