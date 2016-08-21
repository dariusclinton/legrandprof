<?php

/* @LGPUser/Security/login.html.twig */
class __TwigTemplate_47d1c58e66a9587ede063bd4e5d8d406dbacb7dbe005383442725811650c9bac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPUserBundle::layout.html.twig", "@LGPUser/Security/login.html.twig", 1);
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
        $__internal_12b6e6cd6442f9bf19b93bd91cddb6bea6f87107ae38f2ec945e5d2ffbff4374 = $this->env->getExtension("native_profiler");
        $__internal_12b6e6cd6442f9bf19b93bd91cddb6bea6f87107ae38f2ec945e5d2ffbff4374->enter($__internal_12b6e6cd6442f9bf19b93bd91cddb6bea6f87107ae38f2ec945e5d2ffbff4374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b6e6cd6442f9bf19b93bd91cddb6bea6f87107ae38f2ec945e5d2ffbff4374->leave($__internal_12b6e6cd6442f9bf19b93bd91cddb6bea6f87107ae38f2ec945e5d2ffbff4374_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24418c901d7603e787b135d1a4262f6016ab3bdf15007b362e000b99c5df207b = $this->env->getExtension("native_profiler");
        $__internal_24418c901d7603e787b135d1a4262f6016ab3bdf15007b362e000b99c5df207b->enter($__internal_24418c901d7603e787b135d1a4262f6016ab3bdf15007b362e000b99c5df207b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_24418c901d7603e787b135d1a4262f6016ab3bdf15007b362e000b99c5df207b->leave($__internal_24418c901d7603e787b135d1a4262f6016ab3bdf15007b362e000b99c5df207b_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5827aa8e37384ecdc8ba36c3ca0311e0d6c66a8a13c0526596882214a2b75c71 = $this->env->getExtension("native_profiler");
        $__internal_5827aa8e37384ecdc8ba36c3ca0311e0d6c66a8a13c0526596882214a2b75c71->enter($__internal_5827aa8e37384ecdc8ba36c3ca0311e0d6c66a8a13c0526596882214a2b75c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
          <label for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
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
        
        $__internal_5827aa8e37384ecdc8ba36c3ca0311e0d6c66a8a13c0526596882214a2b75c71->leave($__internal_5827aa8e37384ecdc8ba36c3ca0311e0d6c66a8a13c0526596882214a2b75c71_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 39,  106 => 35,  97 => 29,  89 => 24,  85 => 23,  79 => 20,  75 => 19,  72 => 18,  66 => 16,  64 => 15,  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
/*           <label for="username">{{ 'security.login.username'|trans }}</label>*/
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
