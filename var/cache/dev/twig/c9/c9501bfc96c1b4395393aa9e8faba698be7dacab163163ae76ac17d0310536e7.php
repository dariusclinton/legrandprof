<?php

/* LGPUserBundle:Message:send.html.twig */
class __TwigTemplate_6e203861e6c6dd429d10be850d13e9c7b7fba3ff0c2eedfa2450aeda645beaac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LGPCoreBundle::layout.html.twig", "LGPUserBundle:Message:send.html.twig", 1);
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
        $__internal_7604ec8ba1f5a3fc243ba26a423674a70b6fa4d4e0dc9b4f9185dfe02dd3183f = $this->env->getExtension("native_profiler");
        $__internal_7604ec8ba1f5a3fc243ba26a423674a70b6fa4d4e0dc9b4f9185dfe02dd3183f->enter($__internal_7604ec8ba1f5a3fc243ba26a423674a70b6fa4d4e0dc9b4f9185dfe02dd3183f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Message:send.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7604ec8ba1f5a3fc243ba26a423674a70b6fa4d4e0dc9b4f9185dfe02dd3183f->leave($__internal_7604ec8ba1f5a3fc243ba26a423674a70b6fa4d4e0dc9b4f9185dfe02dd3183f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce06b4fcddd7720cb0904ccafa0ff4ee216e71cde656d78b7d9730df54c17757 = $this->env->getExtension("native_profiler");
        $__internal_ce06b4fcddd7720cb0904ccafa0ff4ee216e71cde656d78b7d9730df54c17757->enter($__internal_ce06b4fcddd7720cb0904ccafa0ff4ee216e71cde656d78b7d9730df54c17757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Messages envoyés - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ce06b4fcddd7720cb0904ccafa0ff4ee216e71cde656d78b7d9730df54c17757->leave($__internal_ce06b4fcddd7720cb0904ccafa0ff4ee216e71cde656d78b7d9730df54c17757_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3883ffce37db483d88a003f9fadf65816a5626aa796496b2294c1fb2c8ec6c36 = $this->env->getExtension("native_profiler");
        $__internal_3883ffce37db483d88a003f9fadf65816a5626aa796496b2294c1fb2c8ec6c36->enter($__internal_3883ffce37db483d88a003f9fadf65816a5626aa796496b2294c1fb2c8ec6c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Les messages envoyés</h1>
  
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
            echo "    <h1 class=\"text-muted\">Aucun message trouvé !</h1>
  ";
        } else {
            // line 17
            echo "    <table class=\"table table-bordered table-hover table-striped\">
      <thead>
        <tr>
          <th>Récepteur</th>
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
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "recepteur", array()), "prenoms", array()), "html", null, true);
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
        
        $__internal_3883ffce37db483d88a003f9fadf65816a5626aa796496b2294c1fb2c8ec6c36->leave($__internal_3883ffce37db483d88a003f9fadf65816a5626aa796496b2294c1fb2c8ec6c36_prof);

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
        return array (  139 => 50,  134 => 47,  122 => 41,  117 => 39,  113 => 38,  107 => 37,  104 => 36,  100 => 35,  80 => 17,  76 => 15,  74 => 14,  69 => 12,  65 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LGPCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Messages envoyés - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>Les messages envoyés</h1>*/
/*   */
/*   <a href="{{ path('lgp_user_message_new') }}" class="btn btn-primary">Nouveau</a>*/
/*   <a href="{{ path('lgp_user_message_receive') }}" class="btn btn-primary">Réçus</a>*/
/*   <a href="{{ path('lgp_user_message_send') }}" class="btn btn-primary">Envoyés</a>*/
/*   */
/*   {% if messages|length <= 0 %}*/
/*     <h1 class="text-muted">Aucun message trouvé !</h1>*/
/*   {% else %}*/
/*     <table class="table table-bordered table-hover table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Récepteur</th>*/
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
/*             <td>{{ message.recepteur.prenoms }} {{ message.recepteur.nom }}</td>*/
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
