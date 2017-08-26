<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Project controller.
 *
 * @Route("api")
 */
class ApiController extends Controller
{
    /**
     * Finds and displays a project entity.
     *
     * @Route("/all_test/{project_id}", name="api_show")
     * @Method("GET")
     */
    public function showAction($project_id)
    {
        $info = [

        ];

        return $this->render('default/index.html.twig', array());
    }

    /**
     * Finds and displays a project entity.
     *
     * @Route("/all_feature/{project_id}", name="api_all_feature")
     * @Method("GET")
     */
    public function getAllFeatures($project_id=null)
    {
        $feature_1 = [
            'id' => 1,
            'name' => 'Send message #1',
            'countVariants' => 35,
            'tags' => ['tag1', 'tag2', 'tag3']
        ];
        $feature_2 = [
            'id' => 2,
            'name' => 'Send message #2',
            'countVariants' => 97,
            'tags' => ['tag1', 'tag4', 'tag5']
        ];
        $feature_3 = [
            'id' => 3,
            'name' => 'Send message #3',
            'countVariants' => 20,
            'tags' => ['tag1', 'tag5', 'tag6']
        ];
        $features = [$feature_1, $feature_2, $feature_3];
        $featuresJson = json_encode($features);

        $response = new Response($featuresJson);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * Finds and displays a project entity.
     *
     * @Route("/all_scenarios/{feature_id}", name="api_all_scenarios")
     * @Method("GET")
     */
    public function getAllScenarios($feature_id = null)
    {
        $scenario_1 = [
            'id'=>1,
            'queueId'=>4,
            'scenarioId'=>1,
            'lastStatus'=>'FAIL',
            'testUrl'=>'http://ta.test',
            'lastTestRange'=>3,
            'lastFailStep'=>'Shit step #1',
            'redmineReportUrl'=>'http://example.com/rep/123',
        ];
        $scenario_2 = [
            'id'=>2,
            'queueId'=>5,
            'scenarioId'=>1,
            'lastStatus'=>'FAIL',
            'testUrl'=>'http://ta.test',
            'lastTestRange'=>3,
            'lastFailStep'=>'Shit step #3',
            'redmineReportUrl'=>'http://example.com/rep/1234',
        ];
        $scenario_3 = [
            'id'=>3,
            'queueId'=>7,
            'scenarioId'=>2,
            'lastStatus'=>'FAIL',
            'testUrl'=>'http://ta.test',
            'lastTestRange'=>3,
            'lastFailStep'=>'Shit step #12',
            'redmineReportUrl'=>'http://example.com/rep/12367',
        ];

        $scenarios = [];

        if ($feature_id == null) {
            $scenarios = [$scenario_1,$scenario_2,$scenario_3];
        }else{
            $scenarios = [$scenario_1,$scenario_2];
        }

        $scenariosJson = json_encode($scenarios);
        $response = new Response($scenariosJson);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


}