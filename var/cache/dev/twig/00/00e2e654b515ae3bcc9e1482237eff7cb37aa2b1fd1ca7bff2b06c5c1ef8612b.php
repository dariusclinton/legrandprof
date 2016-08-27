<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ceb57f991d553da324317333346662eff21ca55565e593265bca1c40b02bb345 extends Twig_Template
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
        $__internal_d9004e4621b992ec616ddeb02fe2f6090f742c898983d651bdc28b9533510a57 = $this->env->getExtension("native_profiler");
        $__internal_d9004e4621b992ec616ddeb02fe2f6090f742c898983d651bdc28b9533510a57->enter($__internal_d9004e4621b992ec616ddeb02fe2f6090f742c898983d651bdc28b9533510a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d9004e4621b992ec616ddeb02fe2f6090f742c898983d651bdc28b9533510a57->leave($__internal_d9004e4621b992ec616ddeb02fe2f6090f742c898983d651bdc28b9533510a57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
