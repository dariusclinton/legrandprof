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
        $__internal_e5d84a4f9546b09dc6f21d013282446ce581a4f2e4f1e3f91450e0aba1154465 = $this->env->getExtension("native_profiler");
        $__internal_e5d84a4f9546b09dc6f21d013282446ce581a4f2e4f1e3f91450e0aba1154465->enter($__internal_e5d84a4f9546b09dc6f21d013282446ce581a4f2e4f1e3f91450e0aba1154465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5d84a4f9546b09dc6f21d013282446ce581a4f2e4f1e3f91450e0aba1154465->leave($__internal_e5d84a4f9546b09dc6f21d013282446ce581a4f2e4f1e3f91450e0aba1154465_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5d187f7f0f7612dfdeec3737e99b9623e66082c31824d8dcd6067bd63a97747 = $this->env->getExtension("native_profiler");
        $__internal_f5d187f7f0f7612dfdeec3737e99b9623e66082c31824d8dcd6067bd63a97747->enter($__internal_f5d187f7f0f7612dfdeec3737e99b9623e66082c31824d8dcd6067bd63a97747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f5d187f7f0f7612dfdeec3737e99b9623e66082c31824d8dcd6067bd63a97747->leave($__internal_f5d187f7f0f7612dfdeec3737e99b9623e66082c31824d8dcd6067bd63a97747_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58af7ed4c9d2e960db3da19aa3a99010cbfdfd7ce28b769176351dd76d533de3 = $this->env->getExtension("native_profiler");
        $__internal_58af7ed4c9d2e960db3da19aa3a99010cbfdfd7ce28b769176351dd76d533de3->enter($__internal_58af7ed4c9d2e960db3da19aa3a99010cbfdfd7ce28b769176351dd76d533de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_58af7ed4c9d2e960db3da19aa3a99010cbfdfd7ce28b769176351dd76d533de3->leave($__internal_58af7ed4c9d2e960db3da19aa3a99010cbfdfd7ce28b769176351dd76d533de3_prof);

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
