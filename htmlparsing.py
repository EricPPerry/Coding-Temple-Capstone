import re
import pandas as pd
import numpy as np
import requests
from bs4 import BeautifulSoup as bs
from time import sleep
import csv

#Importing the raw HTML from state pages, containing the top 20 breweries sorted by beer inventory #
top20text = open('files/capstonebeerstatebreweries.txt','r', encoding="utf-8")

#applying regex to filter down to the actual html/link extension 
filetext = top20text.read()
top20text.close()
matches = re.findall("/beer/profile/[a-zA-Z0-9/]+/", filetext)
print(len(matches))
#acquired raw HTML for rest of the breweries (past the top 20) from AL to MO
new_textfile = open('raw_html/breweries20plus.txt','r',encoding="utf-8")
newfiletext = new_textfile.read()
new_textfile.close()
AL_to_MO_matches = re.findall("/beer/profile/[a-zA-Z0-9/]+/", newfiletext)
print(len(AL_to_MO_matches))


#to be safe/prevent duplicates, set up loop to remove any duplicate breweries from top 20 list vs rest of the breweries 
#this will be double checked when processing/cleaning data in pandas
for brewery in matches:
    if brewery in AL_to_MO_matches:
        AL_to_MO_matches.remove(brewery)
print(len(AL_to_MO_matches))


matches += AL_to_MO_matches
print(len(matches))



r = requests.get("https://www.beeradvocate.com/articles/18442/top-50-most-rated-breweries-on-beeradvocate-for-2020/")
soup = bs(r.content, "html.parser")

beer_list = soup.select("ol li")
beer_count = 0
brewery_urls = []
for beer in beer_list:
    #print(beer.get_text().split(',')[0])
    link = beer.find("a")
    brewery_urls.append(link['href'])


def beer_lists(breweries):
    tap_list = []
    type_list = []
    abv_list = []
    ratings_count_list = []
    avg_rating_list = []
    brewery_list = []
    state_list = []
    
    for brewery in breweries:
        rr = requests.get(f"https://www.beeradvocate.com{brewery}")
        soup_2 = bs(rr.content, "html.parser")
        new_list = soup_2.select("tbody tr a")
        non_link_list = soup_2.select("tbody tr td")
        brewery_name = soup_2.find("h1").get_text()
        brew_state = soup_2.select("#info_box a")[1].get_text()
        #testing locating state
        print(brewery_name)


        
        for beer_type in range(0,len(new_list),2):
            state_list.append(brew_state)
            brewery_list.append(f"{brewery_name}")
            tap_list.append(f"{new_list[beer_type].get_text()}")
            type_list.append(f"{new_list[beer_type+1].get_text()}")
        
        for beer in range(0,len(non_link_list), 6 ):
            abv_entry = non_link_list[beer+2].get_text()
            if ',' in abv_entry:
                abv_entry = abv_entry.replace(',','')
            abv_entry = float(abv_entry)
            
            
            ratings_count_entry = non_link_list[beer+3].get_text()
            if ',' in ratings_count_entry:
                ratings_count_entry = ratings_count_entry.replace(',','')
            ratings_count_entry = int(ratings_count_entry)
            
            
            avg_rating_entry = non_link_list[beer+4].get_text()
            if ',' in avg_rating_entry:
                avg_rating_entry = avg_rating_entry.replace(',','')
            avg_rating_entry = float(avg_rating_entry)
            
            
            abv_list.append(f"{abv_entry}")
            ratings_count_list.append(f"{ratings_count_entry}")
            avg_rating_list.append(f"{avg_rating_entry}")
        

        #trying to do the archived lists
        rr = requests.get(f"https://www.beeradvocate.com{brewery}?view=beers&show=arc")
        soup_2 = bs(rr.content, "html.parser")
        new_list = soup_2.select("tbody tr a")
        non_link_list = soup_2.select("tbody tr td")

        for beer_type in range(0,len(new_list),2):
            state_list.append(brew_state)
            brewery_list.append(f"{brewery_name}")
            tap_list.append(f"{new_list[beer_type].get_text()}")
            type_list.append(f"{new_list[beer_type+1].get_text()}")
        
        for beer in range(0,len(non_link_list), 6 ):
            abv_entry = non_link_list[beer+2].get_text()
            if ',' in abv_entry:
                abv_entry = abv_entry.replace(',','')
            abv_entry = float(abv_entry)
            
            
            ratings_count_entry = non_link_list[beer+3].get_text()
            if ',' in ratings_count_entry:
                ratings_count_entry = ratings_count_entry.replace(',','')
            ratings_count_entry = int(ratings_count_entry)
            
            
            avg_rating_entry = non_link_list[beer+4].get_text()
            if ',' in avg_rating_entry:
                avg_rating_entry = avg_rating_entry.replace(',','')
            avg_rating_entry = float(avg_rating_entry)
            
            
            abv_list.append(f"{abv_entry}")
            ratings_count_list.append(f"{ratings_count_entry}")
            avg_rating_list.append(f"{avg_rating_entry}")
            
        print(len(tap_list))
        
        #sleep(0.2)
    return [brewery_list, tap_list,type_list, abv_list, ratings_count_list, avg_rating_list, state_list]



beers_and_types = beer_lists(matches)





'''
print(len(beers_and_types[0]))
print(len(beers_and_types[1]))
print(len(beers_and_types[2]))
print(len(beers_and_types[3]))
print(len(beers_and_types[4]))
print(len(beers_and_types[5]))
'''
