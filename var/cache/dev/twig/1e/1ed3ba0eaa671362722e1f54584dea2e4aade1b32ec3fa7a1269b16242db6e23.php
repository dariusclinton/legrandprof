<?php

/* LGPUserBundle:Dashboard:prof.html.twig */
class __TwigTemplate_d35195c8b1c4b364d81028ecc014421b003b7daa004ac7b4eabf047235f15169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Dashboard:prof.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_submenu' => array($this, 'block_header_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7248c109794d4a479862f32e6980cf0fb49cff7e7784f6e6ed2f7d488fc0904 = $this->env->getExtension("native_profiler");
        $__internal_a7248c109794d4a479862f32e6980cf0fb49cff7e7784f6e6ed2f7d488fc0904->enter($__internal_a7248c109794d4a479862f32e6980cf0fb49cff7e7784f6e6ed2f7d488fc0904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Dashboard:prof.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7248c109794d4a479862f32e6980cf0fb49cff7e7784f6e6ed2f7d488fc0904->leave($__internal_a7248c109794d4a479862f32e6980cf0fb49cff7e7784f6e6ed2f7d488fc0904_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b2849c7271815df914253cb11a56391253a1bbd915552749107096576d6cbdd = $this->env->getExtension("native_profiler");
        $__internal_6b2849c7271815df914253cb11a56391253a1bbd915552749107096576d6cbdd->enter($__internal_6b2849c7271815df914253cb11a56391253a1bbd915552749107096576d6cbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mon Tableau de bord - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6b2849c7271815df914253cb11a56391253a1bbd915552749107096576d6cbdd->leave($__internal_6b2849c7271815df914253cb11a56391253a1bbd915552749107096576d6cbdd_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_1a9578a0643c4ef6a7041d0c34e7aa7729a12809282c6524cc74cee4c22155ce = $this->env->getExtension("native_profiler");
        $__internal_1a9578a0643c4ef6a7041d0c34e7aa7729a12809282c6524cc74cee4c22155ce->enter($__internal_1a9578a0643c4ef6a7041d0c34e7aa7729a12809282c6524cc74cee4c22155ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        echo " 
    ";
        // line 8
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_1a9578a0643c4ef6a7041d0c34e7aa7729a12809282c6524cc74cee4c22155ce->leave($__internal_1a9578a0643c4ef6a7041d0c34e7aa7729a12809282c6524cc74cee4c22155ce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0383c8b0697e0d6d9bda6156fe7457f2672f9ef0ffb61e47c4aa67c6ad42fa65 = $this->env->getExtension("native_profiler");
        $__internal_0383c8b0697e0d6d9bda6156fe7457f2672f9ef0ffb61e47c4aa67c6ad42fa65->enter($__internal_0383c8b0697e0d6d9bda6156fe7457f2672f9ef0ffb61e47c4aa67c6ad42fa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
<div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"profile-block\">
              ";
        // line 19
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()))) {
            // line 20
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" class=\"img-responsive\">
              ";
        }
        // line 22
        echo "            </div>
            <div class=\"infos-block\">
              <h2>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenoms", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</h2>
              <p>
                <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
                <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
              </p>
              <center><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-primary\">Compléter profil</a>

            </div>
          </div>

          <div class=\"col-md-9\">

            <div class=\"notifications-block\">
                <div class=\"notifications-header\">
                    ";
        // line 38
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 39
            echo "                        Hello Prof !
                    ";
        } else {
            // line 41
            echo "                      Hello Parent !
                    ";
        }
        // line 43
        echo "                </div>
                <div class=\"notifications-content\">
                    ";
        // line 45
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "presentation", array(), "any", true, true)) {
            // line 46
            echo "                      <h3 style=\"height: 20px;margin-top:0px\">Hello Prof !</h3>
                    ";
        } else {
            // line 48
            echo "                      <h3 style=\"height: 20px;margin-top:0px\">Hello Parent !</h3>
                    ";
        }
        // line 50
        echo "                </div>
            </div>
            <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Recommandation</div>
                    <div class=\"notifications-content\">Vous n'avez pas encore obtenu de recommandations. Sollicitez vos amis pour en obtenir dès à présent.</div>
            </div>
            <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Votre profil</div>
                    <div class=\"notifications-content\">Votre profil est incomplet, veuillez <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Compléter votre profil</a></div>
            </div>


          </div>
        </div>
      </div>
    </div>
</div>

";
        
        $__internal_0383c8b0697e0d6d9bda6156fe7457f2672f9ef0ffb61e47c4aa67c6ad42fa65->leave($__internal_0383c8b0697e0d6d9bda6156fe7457f2672f9ef0ffb61e47c4aa67c6ad42fa65_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Dashboard:prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 58,  142 => 50,  138 => 48,  134 => 46,  132 => 45,  128 => 43,  124 => 41,  120 => 39,  118 => 38,  106 => 29,  96 => 24,  92 => 22,  86 => 20,  84 => 19,  75 => 12,  69 => 11,  60 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Mon Tableau de bord - {{ parent() }}
{% endblock %}

{% block header_submenu %} 
    {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}

<div class=\"bg-grey dashboard\">
    <div class=\"content-wrapper\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"profile-block\">
              {% if app.user.image is not null %}
                <img src=\"{{ asset(app.user.image.webPath) }}\" class=\"img-responsive\">
              {% endif %}
            </div>
            <div class=\"infos-block\">
              <h2>{{ app.user.prenoms }} {{ app.user.nom }}</h2>
              <p>
                <span class=\"on\"><i class=\"fa fa-check\"></i></span>&nbsp;&nbsp;Profil complet<br>
                <span class=\"off\"><i class=\"fa fa-remove\"></i></span> &nbsp;&nbsp;Profil recommandé
              </p>
              <center><a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-primary\">Compléter profil</a>

            </div>
          </div>

          <div class=\"col-md-9\">

            <div class=\"notifications-block\">
                <div class=\"notifications-header\">
                    {% if user.presentation is defined %}
                        Hello Prof !
                    {% else %}
                      Hello Parent !
                    {% endif %}
                </div>
                <div class=\"notifications-content\">
                    {% if user.presentation is defined %}
                      <h3 style=\"height: 20px;margin-top:0px\">Hello Prof !</h3>
                    {% else %}
                      <h3 style=\"height: 20px;margin-top:0px\">Hello Parent !</h3>
                    {% endif %}
                </div>
            </div>
            <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Recommandation</div>
                    <div class=\"notifications-content\">Vous n'avez pas encore obtenu de recommandations. Sollicitez vos amis pour en obtenir dès à présent.</div>
            </div>
            <div class=\"notifications-block\">
                    <div class=\"notifications-header\">Votre profil</div>
                    <div class=\"notifications-content\">Votre profil est incomplet, veuillez <a href=\"{{ path('fos_user_profile_edit') }}\">Compléter votre profil</a></div>
            </div>


          </div>
        </div>
      </div>
    </div>
</div>

{% endblock %}";
    }
}
