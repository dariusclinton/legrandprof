<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_30f800bd776fcb92ab8092a7efe6b4aea8e4a3107e5c823f5b2b65e2a3d260f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8887f80a30f17431dfa55faf312fde13c5d60f3e11916d9ea2683c5bd49d9838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8887f80a30f17431dfa55faf312fde13c5d60f3e11916d9ea2683c5bd49d9838->enter($__internal_8887f80a30f17431dfa55faf312fde13c5d60f3e11916d9ea2683c5bd49d9838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8887f80a30f17431dfa55faf312fde13c5d60f3e11916d9ea2683c5bd49d9838->leave($__internal_8887f80a30f17431dfa55faf312fde13c5d60f3e11916d9ea2683c5bd49d9838_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
