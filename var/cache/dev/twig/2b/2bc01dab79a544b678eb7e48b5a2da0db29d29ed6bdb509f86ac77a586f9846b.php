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
        $__internal_584e0810c54be7a8cd271c00d7adab70fa20711b5d4ab758df90bb0291381766 = $this->env->getExtension("native_profiler");
        $__internal_584e0810c54be7a8cd271c00d7adab70fa20711b5d4ab758df90bb0291381766->enter($__internal_584e0810c54be7a8cd271c00d7adab70fa20711b5d4ab758df90bb0291381766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_584e0810c54be7a8cd271c00d7adab70fa20711b5d4ab758df90bb0291381766->leave($__internal_584e0810c54be7a8cd271c00d7adab70fa20711b5d4ab758df90bb0291381766_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ec41bba460b317c744b0c3539ee5e6e4fcabc2c7957c6180e3ff6ff789c89c8 = $this->env->getExtension("native_profiler");
        $__internal_8ec41bba460b317c744b0c3539ee5e6e4fcabc2c7957c6180e3ff6ff789c89c8->enter($__internal_8ec41bba460b317c744b0c3539ee5e6e4fcabc2c7957c6180e3ff6ff789c89c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " - Edit profile - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8ec41bba460b317c744b0c3539ee5e6e4fcabc2c7957c6180e3ff6ff789c89c8->leave($__internal_8ec41bba460b317c744b0c3539ee5e6e4fcabc2c7957c6180e3ff6ff789c89c8_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_238c6c7eb2d95d2b73522ff3dbd853be8e41e21d47bc234c6c0a6d618fc468d8 = $this->env->getExtension("native_profiler");
        $__internal_238c6c7eb2d95d2b73522ff3dbd853be8e41e21d47bc234c6c0a6d618fc468d8->enter($__internal_238c6c7eb2d95d2b73522ff3dbd853be8e41e21d47bc234c6c0a6d618fc468d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@LGPUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_238c6c7eb2d95d2b73522ff3dbd853be8e41e21d47bc234c6c0a6d618fc468d8->leave($__internal_238c6c7eb2d95d2b73522ff3dbd853be8e41e21d47bc234c6c0a6d618fc468d8_prof);

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
/* */
