<?php

namespace Helpers;

class RenderHelper {
    public static function restaurantsToChainsMarkdown(array $restaurantChains){
        foreach ($restaurantChains as $restaurantChain){
            print($restaurantChain->toMarkdown());
            print(sprintf("## Restaurant Chain Information\n"));
            foreach ($restaurantChain->getRestaurantLocation() as $restaurantLocation){
                print($restaurantLocation->toNameMarkdown());
                print($restaurantLocation->toMarkdown());
                print(sprintf("#### Employees:\n"));
                foreach ($restaurantLocation->getEmployees() as $employee){
                    print($employee->toMarkdown());
                }
            }
        }
    }

    public static function restaurantsToChainsJson(array $restaurantChains): array{
        $output = [];
        $i = 0;
        foreach ($restaurantChains as $restaurantChain) {
            $i++;
            $output["restaurantChains".$i] = $restaurantChain->toArray();
    
            foreach ($restaurantChain->getRestaurantLocation() as $restaurantLocation) {
                
                $output["restaurantChains".$i]["restaurantLocations"]["name"] = $restaurantLocation->toNameArray();
    
                $restaurantLocationArray = $restaurantLocation->toArray();
                $output["restaurantChains".$i]["restaurantLocations"]["detail"] = $restaurantLocationArray;
    
                $employees = [];
                foreach ($restaurantLocation->getEmployees() as $employee) {
                    $employees = $employee->toArray();
                }
                $output["restaurantChains".$i]["restaurantLocations"]["employees"] = $employees;
            }
        }
        return $output;
    }

    public static function restaurantsToChainsTxt(array $restaurantChains){
        foreach ($restaurantChains as $restaurantChain){
            print($restaurantChain->toString());
            print("\t[Restaurant Chain Information]\n");
            foreach ($restaurantChain->getRestaurantLocation() as $restaurantLocation){
                print($restaurantLocation->toNameString());
                print($restaurantLocation->toString());
                print("\t・Employees:\n");
                foreach ($restaurantLocation->getEmployees() as $employee){
                    print($employee->toString());
                }
            }
        }
    }
}
?>