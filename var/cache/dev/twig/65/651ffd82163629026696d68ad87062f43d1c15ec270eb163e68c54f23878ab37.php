<?php

/* LGPUserBundle:Message:send.html.twig */
class __TwigTemplate_02833d7870cdd13eca16015553b05748ec4ddf2c3226415da529344d31c685ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Message:send.html.twig", 1);
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
        $__internal_33ef556f0206a1d0f3f96801bbbd0d0d18866574f4791b6b352aed6518621b00 = $this->env->getExtension("native_profiler");
        $__internal_33ef556f0206a1d0f3f96801bbbd0d0d18866574f4791b6b352aed6518621b00->enter($__internal_33ef556f0206a1d0f3f96801bbbd0d0d18866574f4791b6b352aed6518621b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:send.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33ef556f0206a1d0f3f96801bbbd0d0d18866574f4791b6b352aed6518621b00->leave($__internal_33ef556f0206a1d0f3f96801bbbd0d0d18866574f4791b6b352aed6518621b00_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29a04e1b8d37592dc51b1449304f01be568ac84776efbbf6816d841929a60e9d = $this->env->getExtension("native_profiler");
        $__internal_29a04e1b8d37592dc51b1449304f01be568ac84776efbbf6816d841929a60e9d->enter($__internal_29a04e1b8d37592dc51b1449304f01be568ac84776efbbf6816d841929a60e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Messages envoyés - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_29a04e1b8d37592dc51b1449304f01be568ac84776efbbf6816d841929a60e9d->leave($__internal_29a04e1b8d37592dc51b1449304f01be568ac84776efbbf6816d841929a60e9d_prof);

    }

    // line 7
    public function block_header_submenu($context, array $blocks = array())
    {
        $__internal_ea16145e5b1556b22893248cadd58b4d421455380eeda299a6030fcd6f79cfbf = $this->env->getExtension("native_profiler");
        $__internal_ea16145e5b1556b22893248cadd58b4d421455380eeda299a6030fcd6f79cfbf->enter($__internal_ea16145e5b1556b22893248cadd58b4d421455380eeda299a6030fcd6f79cfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_submenu"));

        // line 8
        echo "  ";
        echo twig_include($this->env, $context, "LGPCoreBundle::header-submenu.html.twig");
        echo "
";
        
        $__internal_ea16145e5b1556b22893248cadd58b4d421455380eeda299a6030fcd6f79cfbf->leave($__internal_ea16145e5b1556b22893248cadd58b4d421455380eeda299a6030fcd6f79cfbf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e7cb07bce02863c00f64cfb5872aee04d65b89b1fc38970d57ed4219e85e7c5 = $this->env->getExtension("native_profiler");
        $__internal_9e7cb07bce02863c00f64cfb5872aee04d65b89b1fc38970d57ed4219e85e7c5->enter($__internal_9e7cb07bce02863c00f64cfb5872aee04d65b89b1fc38970d57ed4219e85e7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <h1>Les messages envoyés</h1>
  
  <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_new");
        echo "\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_receive");
        echo "\" class=\"btn btn-primary\">Réçus</a>
  <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
        echo "\" class=\"btn btn-primary\">Envoyés</a>
  
  ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) <= 0)) {
            // line 19
            echo "    <h5 class=\"text-muted\">Aucun message trouvé !</h5>
  ";
        } else {
            // line 21
            echo "    <table class=\"table table-bordered table-hover table-striped messages-table\">
      <thead>
        <tr>
          <th>Récepteur</th>
          <th>Objet</th>
          <th>Contenu</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                echo "          <tr>
            <td>
              <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "nom", array()), "html", null, true);
                echo " </a>
            </td>
            <td>
              <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                echo "</a>
            </td>
            <td>
              <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_voir", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
                echo " </a>
            </td>
            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_message_delete", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
                echo "' class=\"bt btn-danger btn-sm delete_confirm\">
                Supprimer
              </a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "      </tbody>
    </table>
      
    <div class=\"messages-details\"></div>
  ";
        }
        // line 56
        echo "  
";
        
        $__internal_9e7cb07bce02863c00f64cfb5872aee04d65b89b1fc38970d57ed4219e85e7c5->leave($__internal_9e7cb07bce02863c00f64cfb5872aee04d65b89b1fc38970d57ed4219e85e7c5_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Message:send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 56,  160 => 51,  148 => 45,  143 => 43,  136 => 41,  128 => 38,  118 => 35,  114 => 33,  110 => 32,  97 => 21,  93 => 19,  91 => 18,  86 => 16,  82 => 15,  78 => 14,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Messages envoyés - {{ parent() }}
{% endblock %}

{% block header_submenu %}
  {{ include('LGPCoreBundle::header-submenu.html.twig') }}
{% endblock %}

{% block body %}
  <h1>Les messages envoyés</h1>
  
  <a href=\"{{ path('lgp_user_message_new') }}\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"{{ path('lgp_user_message_receive') }}\" class=\"btn btn-primary\">Réçus</a>
  <a href=\"{{ path('lgp_user_message_send') }}\" class=\"btn btn-primary\">Envoyés</a>
  
  {% if messages|length <= 0 %}
    <h5 class=\"text-muted\">Aucun message trouvé !</h5>
  {% else %}
    <table class=\"table table-bordered table-hover table-striped messages-table\">
      <thead>
        <tr>
          <th>Récepteur</th>
          <th>Objet</th>
          <th>Contenu</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        {% for message in messages %}
          <tr>
            <td>
              <a href=\"{{ path('lgp_user_message_voir', {'id': message.id}) }}\">{{ message.recepteur.prenoms }} {{ message.recepteur.nom }} </a>
            </td>
            <td>
              <a href=\"{{ path('lgp_user_message_voir', {'id': message.id}) }}\">{{ message.objet }}</a>
            </td>
            <td>
              <a href=\"{{ path('lgp_user_message_voir', {'id': message.id}) }}\"> {{ message.contenu }} </a>
            </td>
            <td>{{ message.dateEnvoi|date('d/m/Y') }}</td>
            <td>
              <a href='{{ path('lgp_user_message_delete',  {'id': message.id }) }}' class=\"bt btn-danger btn-sm delete_confirm\">
                Supprimer
              </a>
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
      
    <div class=\"messages-details\"></div>
  {% endif %}
  
{% endblock %}";
    }
}