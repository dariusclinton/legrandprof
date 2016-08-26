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
        $__internal_efddce73646158a96b73376bec4d4c705a9c2fc6835e938158ded42f24682bab = $this->env->getExtension("native_profiler");
        $__internal_efddce73646158a96b73376bec4d4c705a9c2fc6835e938158ded42f24682bab->enter($__internal_efddce73646158a96b73376bec4d4c705a9c2fc6835e938158ded42f24682bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efddce73646158a96b73376bec4d4c705a9c2fc6835e938158ded42f24682bab->leave($__internal_efddce73646158a96b73376bec4d4c705a9c2fc6835e938158ded42f24682bab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_201fcc6d2817e1f00a1cc5f6723353ce0ce72d886098cc45cb75c50d2405f12e = $this->env->getExtension("native_profiler");
        $__internal_201fcc6d2817e1f00a1cc5f6723353ce0ce72d886098cc45cb75c50d2405f12e->enter($__internal_201fcc6d2817e1f00a1cc5f6723353ce0ce72d886098cc45cb75c50d2405f12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_201fcc6d2817e1f00a1cc5f6723353ce0ce72d886098cc45cb75c50d2405f12e->leave($__internal_201fcc6d2817e1f00a1cc5f6723353ce0ce72d886098cc45cb75c50d2405f12e_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b24c5d4c600c8b498d6cb272d297edaac8dd7cb4c521dc6fc338167e8a7efbe2 = $this->env->getExtension("native_profiler");
        $__internal_b24c5d4c600c8b498d6cb272d297edaac8dd7cb4c521dc6fc338167e8a7efbe2->enter($__internal_b24c5d4c600c8b498d6cb272d297edaac8dd7cb4c521dc6fc338167e8a7efbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_b24c5d4c600c8b498d6cb272d297edaac8dd7cb4c521dc6fc338167e8a7efbe2->leave($__internal_b24c5d4c600c8b498d6cb272d297edaac8dd7cb4c521dc6fc338167e8a7efbe2_prof);

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
