<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AliController extends AbstractController
{
    #[Route('/ali', name: 'app_ali')]
    public function index(Request $request): Response
    {
        // Exécution du script Python si le formulaire est soumis
        if ($request->isMethod('POST')) {
            $this->executePythonCode();

            // Vérifier si le fichier HTML existe
            if (file_exists('test.html')) {
                // Lire le contenu HTML généré
                $htmlContent = file_get_contents('test.html');
            }
        }

        // Charger les 10 premières lignes du fichier CSV
        $csvData = $this->loadFirstTenRows('test.csv');

        // Passage du contenu HTML généré et les 10 premières lignes du CSV au modèle Twig
        return $this->render('ali/home.html.twig', [
            'html_content' => $htmlContent ?? null,
            'csv_data' => $csvData,
        ]);
    }

    // Fonction pour exécuter le script Python
    private function executePythonCode(): void
    {
        // Exécution du script Python
        $output = shell_exec('python programmeextraction.py 2>&1');
        
        // Afficher la sortie (utile pour le débogage)
        var_dump($output);
    }

    // Fonction pour charger les 10 premières lignes du fichier CSV
    private function loadFirstTenRows(string $filePath): array
    {
        $csvData = [];
        if (($handle = fopen($filePath, 'r')) !== false) {
            $count = 0;
            while (($row = fgetcsv($handle, 1000, ';')) !== false && $count < 10) {
                $csvData[] = $row;
                $count++;
            }
            fclose($handle);
        }

        return $csvData;
    }
}
