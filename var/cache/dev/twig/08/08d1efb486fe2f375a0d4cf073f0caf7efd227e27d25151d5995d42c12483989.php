<?php

/* @LGPUser/Message/receive.html.twig */
class __TwigTemplate_94a86aabfe892bee78e9b05868f31c46bed54c97b3a76a963e05650498385389 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "@LGPUser/Message/receive.html.twig", 1);
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
        $__internal_6a43ea6374ee7bb02ffb51492fa8bd37b259d21f49de1e78cf9405d01975507d = $this->env->getExtension("native_profiler");
        $__internal_6a43ea6374ee7bb02ffb51492fa8bd37b259d21f49de1e78cf9405d01975507d->enter($__internal_6a43ea6374ee7bb02ffb51492fa8bd37b259d21f49de1e78cf9405d01975507d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LGPUser/Message/receive.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a43ea6374ee7bb02ffb51492fa8bd37b259d21f49de1e78cf9405d01975507d->leave($__internal_6a43ea6374ee7bb02ffb51492fa8bd37b259d21f49de1e78cf9405d01975507d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2a52ac8ec873436655efa7807d2dbc827aee2cd35455520f90f11186b9fe8e6 = $this->env->getExtension("native_profiler");
        $__internal_e2a52ac8ec873436655efa7807d2dbc827aee2cd35455520f90f11186b9fe8e6->enter($__internal_e2a52ac8ec873436655efa7807d2dbc827aee2cd35455520f90f11186b9fe8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Messages reçus - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e2a52ac8ec873436655efa7807d2dbc827aee2cd35455520f90f11186b9fe8e6->leave($__internal_e2a52ac8ec873436655efa7807d2dbc827aee2cd35455520f90f11186b9fe8e6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_817265712097b7cf07af418aa8b7fbad688d3714e97f9f6a1df80abd92553f29 = $this->env->getExtension("native_profiler");
        $__internal_817265712097b7cf07af418aa8b7fbad688d3714e97f9f6a1df80abd92553f29->enter($__internal_817265712097b7cf07af418aa8b7fbad688d3714e97f9f6a1df80abd92553f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Les messages reçus</h1>
  
  <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_new");
        echo "\" class=\"btn btn-primary\">Nouveau</a>
  <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_receive");
        echo "\" class=\"btn btn-primary\">Réçus</a>
  <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("lgp_user_message_send");
        echo "\" class=\"btn btn-primary\">Envoyés</a>
  
  ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) <= 0)) {
            // line 15
            echo "    <h1 class=\"text-muted\">Aucun message reçu !</h1>
  ";
        } else {
            // line 17
            echo "    <table class=\"table table-bordered table-hover table-striped\">
      <thead>
        <tr>
          <th>Expéditeur</th>
          <th>Objet</th>
          <th>Contenu</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td>footer</td>
          <td>footer</td>
          <td>footer</td>
          <td>footer</td>
        </tr>
      </tfoot>
      <tbody>
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 36
                echo "          <tr>
            <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "expediteur", array()), "prenoms", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "nom", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "objet", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenu", array()), "html", null, true);
                echo "</td>
            <td>
              <a href='";
                // line 41
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
            // line 47
            echo "      </tbody>
    </table>
  ";
        }
        // line 50
        echo "  
";
        
        $__internal_817265712097b7cf07af418aa8b7fbad688d3714e97f9f6a1df80abd92553f29->leave($__internal_817265712097b7cf07af418aa8b7fbad688d3714e97f9f6a1df80abd92553f29_prof);

    }

    public function getTemplateName()
    {
        return "@LGPUser/Message/receive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 50,  134 => 47,  122 => 41,  117 => 39,  113 => 38,  107 => 37,  104 => 36,  100 => 35,  80 => 17,  76 => 15,  74 => 14,  69 => 12,  65 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Messages reçus - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Les messages reçus</h1>*/
/*   */
/*   <a href="{{ path('lgp_user_message_new') }}" class="btn btn-primary">Nouveau</a>*/
/*   <a href="{{ path('lgp_user_message_receive') }}" class="btn btn-primary">Réçus</a>*/
/*   <a href="{{ path('lgp_user_message_send') }}" class="btn btn-primary">Envoyés</a>*/
/*   */
/*   {% if messages|length <= 0 %}*/
/*     <h1 class="text-muted">Aucun message reçu !</h1>*/
/*   {% else %}*/
/*     <table class="table table-bordered table-hover table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Expéditeur</th>*/
/*           <th>Objet</th>*/
/*           <th>Contenu</th>*/
/*           <th>Action</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tfoot>*/
/*         <tr>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*           <td>footer</td>*/
/*         </tr>*/
/*       </tfoot>*/
/*       <tbody>*/
/*         {% for message in messages %}*/
/*           <tr>*/
/*             <td>{{ message.expediteur.prenoms }} {{ message.recepteur.nom }}</td>*/
/*             <td>{{ message.objet }}</td>*/
/*             <td>{{ message.contenu }}</td>*/
/*             <td>*/
/*               <a href='{{ path('lgp_user_message_delete',  {'id': message.id }) }}' class="bt btn-danger btn-sm delete_confirm">*/
/*                 Supprimer*/
/*               </a>*/
/*             </td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*   {% endif %}*/
/*   */
/* {% endblock %}*/
