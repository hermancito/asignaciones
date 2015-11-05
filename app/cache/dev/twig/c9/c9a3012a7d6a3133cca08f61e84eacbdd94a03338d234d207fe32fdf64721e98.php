<?php

/* hermanUserBundle:User:view.html.twig */
class __TwigTemplate_5db7cd325aa61feb8a27108f2d896a540bc142e6e07d5b545e400272e3c5be6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "hermanUserBundle:User:view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d149ff646b43ccfdaf66e72ce8b7378dedcb5b7786e9790043435236bdc47bdf = $this->env->getExtension("native_profiler");
        $__internal_d149ff646b43ccfdaf66e72ce8b7378dedcb5b7786e9790043435236bdc47bdf->enter($__internal_d149ff646b43ccfdaf66e72ce8b7378dedcb5b7786e9790043435236bdc47bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hermanUserBundle:User:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d149ff646b43ccfdaf66e72ce8b7378dedcb5b7786e9790043435236bdc47bdf->leave($__internal_d149ff646b43ccfdaf66e72ce8b7378dedcb5b7786e9790043435236bdc47bdf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d455b51d2061d1c69580f0d388e4ae7e2651c0a64e1bb32a744ab2612ee7e9af = $this->env->getExtension("native_profiler");
        $__internal_d455b51d2061d1c69580f0d388e4ae7e2651c0a64e1bb32a744ab2612ee7e9af->enter($__internal_d455b51d2061d1c69580f0d388e4ae7e2651c0a64e1bb32a744ab2612ee7e9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h2>Usuario seleccionado</h2>

<table border=1>
    <tr>
        <th>Username</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Role</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Acciones</th>
    </tr>
    <tr>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            <td>
                ";
        // line 22
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()) == "ROLE_ADMIN")) {
            // line 23
            echo "                    <strong>Administrador</strong>
                ";
        } else {
            // line 25
            echo "                    <strong>Usuario</strong>
                ";
        }
        // line 27
        echo "            </td>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "</td>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "</td>
            <td>
                <a href=\"\">Editar</a>
                <a href=\"\">Borrar</a>
            </td>
    </tr>  
    
</table>

";
        
        $__internal_d455b51d2061d1c69580f0d388e4ae7e2651c0a64e1bb32a744ab2612ee7e9af->leave($__internal_d455b51d2061d1c69580f0d388e4ae7e2651c0a64e1bb32a744ab2612ee7e9af_prof);

    }

    public function getTemplateName()
    {
        return "hermanUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  86 => 28,  83 => 27,  79 => 25,  75 => 23,  73 => 22,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block body %}*/
/* <h2>Usuario seleccionado</h2>*/
/* */
/* <table border=1>*/
/*     <tr>*/
/*         <th>Username</th>*/
/*         <th>Nombre</th>*/
/*         <th>Apellidos</th>*/
/*         <th>Email</th>*/
/*         <th>Role</th>*/
/*         <th>Created</th>*/
/*         <th>Updated</th>*/
/*         <th>Acciones</th>*/
/*     </tr>*/
/*     <tr>*/
/*             <td>{{ user.username }}</td>*/
/*             <td>{{ user.firstName }}</td>*/
/*             <td>{{ user.lastName }}</td>*/
/*             <td>{{ user.email }}</td>*/
/*             <td>*/
/*                 {% if user.role == 'ROLE_ADMIN' %}*/
/*                     <strong>Administrador</strong>*/
/*                 {% else %}*/
/*                     <strong>Usuario</strong>*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td>{{ user.createdAt|date('d-m-Y H:i') }}</td>*/
/*             <td>{{ user.updatedAt|date('d-m-Y H:i')}}</td>*/
/*             <td>*/
/*                 <a href="">Editar</a>*/
/*                 <a href="">Borrar</a>*/
/*             </td>*/
/*     </tr>  */
/*     */
/* </table>*/
/* */
/* {% endblock %}*/
