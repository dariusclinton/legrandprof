<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_975e776b1bf572a7952d50f42ec627772521241d8d29b369135049cee7078ed3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10df792843c15c5a729d986769d8fad715c5ea72796ac77a3f52481a6c3d56e5 = $this->env->getExtension("native_profiler");
        $__internal_10df792843c15c5a729d986769d8fad715c5ea72796ac77a3f52481a6c3d56e5->enter($__internal_10df792843c15c5a729d986769d8fad715c5ea72796ac77a3f52481a6c3d56e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10df792843c15c5a729d986769d8fad715c5ea72796ac77a3f52481a6c3d56e5->leave($__internal_10df792843c15c5a729d986769d8fad715c5ea72796ac77a3f52481a6c3d56e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_136d5e148233bb06429022f6069e81f21e66c93875e9dd5269db9ff33288b3e7 = $this->env->getExtension("native_profiler");
        $__internal_136d5e148233bb06429022f6069e81f21e66c93875e9dd5269db9ff33288b3e7->enter($__internal_136d5e148233bb06429022f6069e81f21e66c93875e9dd5269db9ff33288b3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_136d5e148233bb06429022f6069e81f21e66c93875e9dd5269db9ff33288b3e7->leave($__internal_136d5e148233bb06429022f6069e81f21e66c93875e9dd5269db9ff33288b3e7_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00237e0779829988fcc6bc96e8498cc48b7368a2282a47ddcc1d4d8b110ebc06 = $this->env->getExtension("native_profiler");
        $__internal_00237e0779829988fcc6bc96e8498cc48b7368a2282a47ddcc1d4d8b110ebc06->enter($__internal_00237e0779829988fcc6bc96e8498cc48b7368a2282a47ddcc1d4d8b110ebc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "

<div class=\"row\">
  <div class=\"col-md-4 col-md-offset-4\">

    ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 18
        echo "
    <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <div class=\"form-group\">
          <label for=\"username\">Adresse email</label>
          <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"
          class=\"form-control\"/>
        </div>

        <div class=\"form-group\">
          <label for=\"password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
          <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"/>
        </div>

        <div class=\"form-group\">
          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
          <label for=\"remember_me\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>

        <div class=\"form-group\">
          <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
          class=\"btn btn-default\"/>
        </div>
    </form>

  </div>
</div>
";
        
        $__internal_00237e0779829988fcc6bc96e8498cc48b7368a2282a47ddcc1d4d8b110ebc06->leave($__internal_00237e0779829988fcc6bc96e8498cc48b7368a2282a47ddcc1d4d8b110ebc06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  103 => 35,  94 => 29,  86 => 24,  79 => 20,  75 => 19,  72 => 18,  66 => 16,  64 => 15,  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'LGPUserBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*   Login - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* */
/* <div class="row">*/
/*   <div class="col-md-4 col-md-offset-4">*/
/* */
/*     {% if error %}*/
/*         <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <div class="form-group">*/
/*           <label for="username">Adresse email</label>*/
/*           <input type="text" id="username" name="_username" value="{{ last_username }}" required="required"*/
/*           class="form-control"/>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*           <input type="password" id="password" name="_password" required="required" class="form-control"/>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*           <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}"*/
/*           class="btn btn-default"/>*/
/*         </div>*/
/*     </form>*/
/* */
/*   </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
