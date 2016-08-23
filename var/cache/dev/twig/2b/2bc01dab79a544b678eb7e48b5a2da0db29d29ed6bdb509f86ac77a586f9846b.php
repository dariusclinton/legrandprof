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
        $__internal_20ddf7919befc285f1051094f68ee3ac77b6c9b38c7164afc9ea398e9514ca62 = $this->env->getExtension("native_profiler");
        $__internal_20ddf7919befc285f1051094f68ee3ac77b6c9b38c7164afc9ea398e9514ca62->enter($__internal_20ddf7919befc285f1051094f68ee3ac77b6c9b38c7164afc9ea398e9514ca62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20ddf7919befc285f1051094f68ee3ac77b6c9b38c7164afc9ea398e9514ca62->leave($__internal_20ddf7919befc285f1051094f68ee3ac77b6c9b38c7164afc9ea398e9514ca62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4274a7491c7a2d3ca1cb144e8403f841b6a70bec33823c233cf7349d7bd8a59 = $this->env->getExtension("native_profiler");
        $__internal_f4274a7491c7a2d3ca1cb144e8403f841b6a70bec33823c233cf7349d7bd8a59->enter($__internal_f4274a7491c7a2d3ca1cb144e8403f841b6a70bec33823c233cf7349d7bd8a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f4274a7491c7a2d3ca1cb144e8403f841b6a70bec33823c233cf7349d7bd8a59->leave($__internal_f4274a7491c7a2d3ca1cb144e8403f841b6a70bec33823c233cf7349d7bd8a59_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc33b3334397ba969863f14955c7d6a2c8b01d5657b6299f152748285706ae0c = $this->env->getExtension("native_profiler");
        $__internal_dc33b3334397ba969863f14955c7d6a2c8b01d5657b6299f152748285706ae0c->enter($__internal_dc33b3334397ba969863f14955c7d6a2c8b01d5657b6299f152748285706ae0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_dc33b3334397ba969863f14955c7d6a2c8b01d5657b6299f152748285706ae0c->leave($__internal_dc33b3334397ba969863f14955c7d6a2c8b01d5657b6299f152748285706ae0c_prof);

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
