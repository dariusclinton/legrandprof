<?php

/* @LGPUser/Profile/edit.html.twig */
class __TwigTemplate_16410c83b23fc9cc51d6a12eb9cba3140c2a600b14ce10b45eda7987120e79fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@LGPUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b77b00dd18b41f82dd8499675cc429902b6ba4e4f6bd3c25188126d60462b36 = $this->env->getExtension("native_profiler");
        $__internal_9b77b00dd18b41f82dd8499675cc429902b6ba4e4f6bd3c25188126d60462b36->enter($__internal_9b77b00dd18b41f82dd8499675cc429902b6ba4e4f6bd3c25188126d60462b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b77b00dd18b41f82dd8499675cc429902b6ba4e4f6bd3c25188126d60462b36->leave($__internal_9b77b00dd18b41f82dd8499675cc429902b6ba4e4f6bd3c25188126d60462b36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00fee063cb8ff21bdddf26e5ddae6d9c3e3466aa3dbc413baf3e6b353b9887f1 = $this->env->getExtension("native_profiler");
        $__internal_00fee063cb8ff21bdddf26e5ddae6d9c3e3466aa3dbc413baf3e6b353b9887f1->enter($__internal_00fee063cb8ff21bdddf26e5ddae6d9c3e3466aa3dbc413baf3e6b353b9887f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_00fee063cb8ff21bdddf26e5ddae6d9c3e3466aa3dbc413baf3e6b353b9887f1->leave($__internal_00fee063cb8ff21bdddf26e5ddae6d9c3e3466aa3dbc413baf3e6b353b9887f1_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2e0d90971619fe0c73a375a9d0b4d4108f318730cb4b8b49df94c5bd2bc06ea = $this->env->getExtension("native_profiler");
        $__internal_a2e0d90971619fe0c73a375a9d0b4d4108f318730cb4b8b49df94c5bd2bc06ea->enter($__internal_a2e0d90971619fe0c73a375a9d0b4d4108f318730cb4b8b49df94c5bd2bc06ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_a2e0d90971619fe0c73a375a9d0b4d4108f318730cb4b8b49df94c5bd2bc06ea->leave($__internal_a2e0d90971619fe0c73a375a9d0b4d4108f318730cb4b8b49df94c5bd2bc06ea_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  55 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ app.user.prenoms }} {{ app.user.nom }} - Edit profile - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
