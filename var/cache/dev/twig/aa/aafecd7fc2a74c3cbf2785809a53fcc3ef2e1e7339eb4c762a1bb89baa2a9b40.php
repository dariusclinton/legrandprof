<?php

/* LGPUserBundle:Anomalie:index.html.twig */
class __TwigTemplate_73da8ba5633d2657ca2eb1ab3b7fdf0ce535e3d40fb4676f22bf45d33969a9c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Anomalie:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LGPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bf8969963ee2365fd1a5d152d431c45cee06becac1c60910a39becc64c75e04 = $this->env->getExtension("native_profiler");
        $__internal_2bf8969963ee2365fd1a5d152d431c45cee06becac1c60910a39becc64c75e04->enter($__internal_2bf8969963ee2365fd1a5d152d431c45cee06becac1c60910a39becc64c75e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Anomalie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bf8969963ee2365fd1a5d152d431c45cee06becac1c60910a39becc64c75e04->leave($__internal_2bf8969963ee2365fd1a5d152d431c45cee06becac1c60910a39becc64c75e04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8f99986ee0f3ee4255b0187aa74b48785b62300c6b8663545bb987803f1b97f = $this->env->getExtension("native_profiler");
        $__internal_a8f99986ee0f3ee4255b0187aa74b48785b62300c6b8663545bb987803f1b97f->enter($__internal_a8f99986ee0f3ee4255b0187aa74b48785b62300c6b8663545bb987803f1b97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Anomalies signalées - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a8f99986ee0f3ee4255b0187aa74b48785b62300c6b8663545bb987803f1b97f->leave($__internal_a8f99986ee0f3ee4255b0187aa74b48785b62300c6b8663545bb987803f1b97f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7aa08efafc0441a7602a927ae7f533770008ebbdff8657de5055c2c3358b896 = $this->env->getExtension("native_profiler");
        $__internal_c7aa08efafc0441a7602a927ae7f533770008ebbdff8657de5055c2c3358b896->enter($__internal_c7aa08efafc0441a7602a927ae7f533770008ebbdff8657de5055c2c3358b896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  
  <h1>Anomalies signalées</h1>
    
  <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lgp_user_anomalie_add");
        echo "\" class=\"btn btn-primary\">Signaler une anomalie</a>
 
  ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["anomalies"]) ? $context["anomalies"] : $this->getContext($context, "anomalies"))) <= 0)) {
            // line 14
            echo "    
    <h4 class=\"text-muted\">Aucune anomalie trouvee</h4>
  
  ";
        } else {
            // line 18
            echo "  
    <table class=\"table table-bordered table-stripped\">
      <thead>
        <tr>
          <th>Objet</th>
          <th>Contenu</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["anomalies"]) ? $context["anomalies"] : $this->getContext($context, "anomalies")));
            foreach ($context['_seq'] as $context["_key"] => $context["anomalie"]) {
                // line 30
                echo "          <tr>
            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["anomalie"], "objet", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["anomalie"], "contenu", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["anomalie"], "datePublication", array()), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>
              <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_anomalie_update", array("id" => $this->getAttribute($context["anomalie"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">Modifier</a> 
              <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lgp_user_anomalie_delete", array("id" => $this->getAttribute($context["anomalie"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger delete_confirm\">Supprimer</a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anomalie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "      </tbody>
    </table>
    
  ";
        }
        // line 44
        echo "  
";
        
        $__internal_c7aa08efafc0441a7602a927ae7f533770008ebbdff8657de5055c2c3358b896->leave($__internal_c7aa08efafc0441a7602a927ae7f533770008ebbdff8657de5055c2c3358b896_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Anomalie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  122 => 40,  112 => 36,  108 => 35,  103 => 33,  99 => 32,  95 => 31,  92 => 30,  88 => 29,  75 => 18,  69 => 14,  67 => 13,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"LGPCoreBundle::layout.html.twig\" %}

{% block title %}
  Anomalies signalées - {{ parent() }}
{% endblock %}

{% block body %}
  
  <h1>Anomalies signalées</h1>
    
  <a href=\"{{ path('lgp_user_anomalie_add') }}\" class=\"btn btn-primary\">Signaler une anomalie</a>
 
  {% if anomalies|length <= 0 %}
    
    <h4 class=\"text-muted\">Aucune anomalie trouvee</h4>
  
  {% else %}
  
    <table class=\"table table-bordered table-stripped\">
      <thead>
        <tr>
          <th>Objet</th>
          <th>Contenu</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        {% for anomalie in anomalies %}
          <tr>
            <td>{{anomalie.objet}}</td>
            <td>{{anomalie.contenu}}</td>
            <td>{{anomalie.datePublication | date('d/m/Y')}}</td>
            <td>
              <a href=\"{{ path('lgp_user_anomalie_update', {'id': anomalie.id}) }}\" class=\"btn btn-sm btn-info\">Modifier</a> 
              <a href=\"{{ path('lgp_user_anomalie_delete', {'id': anomalie.id}) }}\" class=\"btn btn-sm btn-danger delete_confirm\">Supprimer</a>
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
    
  {% endif %}
  
{% endblock %}";
    }
}
