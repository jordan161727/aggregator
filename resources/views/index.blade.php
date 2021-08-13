@extends('layouts.app')



@section('content')
  <div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2> 
  	 <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
 
  	 	<div class="game mt-8">
  	 		<div class="relative inline-block">
  	 			<a href="#">
  	 				<img src="" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
                     <div  class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px">
                     	
                             <div class="font-semibold text-xs flex justify-center items-center h-full">80%
                             	
                             </div>
                     </div>
  	 			
  	 		</div>
  	 		 <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
    
         </a>
  	 		 <div class="text-gray-400 mt-1">PlayStation 4</div>
  	 	</div>


  	 
		  

  	 </div>
  	      <div class="flex flex-col lg:flex-row my-10">
     	  <div class="recently-reviewed w-full lg:w-3/4  mr-0 lg:mr-32">
     	  	 <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
     	  	    <div class="recently-reviewed-container space-y-12 mt-8">
     	  	    	<div class="bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
					   <style>
                    #dailymotion-pip-small-viewport {
                        top: 46px !important;
                        z-index: 99999 !important;
                      }
                    </style>
                      <div class="dm-player" playerId="x2bup" owners="Philstarlife" sort="recent" keywordsselector="h1.article-title" showOutsidePlaylist="right"></div>
                    <script type="text/javascript" async src="//srvr.dmvs-apac.com/v2/dm-ce.min.js"></script>


                       	<div class="relative flex-none">
  	 			<a href="#">
  	 				<img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
                     <div  class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom: -20px">
                     	
                             <div class="font-semibold text-xs flex justify-center items-center h-full">80%
                             	
                             </div>
                     </div>
  	 		        </div>

  	 		              <div class="ml-12">

  	 		              	 <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Final Fantasy VII Remake</a>
                               <div class="text-gray-400 m-1">Playstation 4</div>
                               <p class="mt-6 text-gray-400  hidden lg:block">
                               	   A Spectacular re-imagining of one of the most visionary games ever, Final Fantasy VII Remake rebuilds and expands the legendary RPG for today. the first game in this project wil be set in the eclectic city of Midgar and presents a fully standalone gaming experience
                               </p>
  	 		              </div>

     	  	</div>
  

   	<div class="bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                       	<div class="relative flex-none">
  	 			<a href="#">
  	 				<img src="/animalcrossing.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
                     <div  class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom: -20px">
                     	
                             <div class="font-semibold text-xs flex justify-center items-center h-full">80%
                             	
                             </div>
                     </div>
  	 		        </div>

  	 		              <div class="ml-12">

  	 		              	 <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Animal Crossing: New Horizons</a>
                               <div class="text-gray-400 m-1">Nintendo Switch</div>
                               <p class="mt-6 text-gray-400  hidden lg:block">
                               	   A Spectacular re-imagining of one of the most visionary games ever, Final Fantasy VII Remake rebuilds and expands the legendary RPG for today. the first game in this project wil be set in the eclectic city of Midgar and presents a fully standalone gaming experience
                               </p>
  	 		              </div>

     	  	</div>


     	  	 	<div class="bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                       	<div class="relative flex-none">
  	 			<a href="#">
  	 				<img src="/doom.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>
                     <div  class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom: -20px">
                     	
                             <div class="font-semibold text-xs flex justify-center items-center h-full">80%
                             	
                             </div>
                     </div>
  	 		        </div>

  	 		              <div class="ml-12">

  	 		              	 <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Doom Eternal</a>
                               <div class="text-gray-400 m-1">Playstation, PC</div>
                               <p class="mt-6 text-gray-400 hidden lg:block">
                               	   A Spectacular re-imagining of one of the most visionary games ever, Final Fantasy VII Remake rebuilds and expands the legendary RPG for today. the first game in this project wil be set in the eclectic city of Midgar and presents a fully standalone gaming experience
                               </p>
  	 		              </div>

     	  	</div>
    	    </div>
     	  </div>
     	  <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
     	  	<h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
     	  	 <div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="#">
  	 				<img src="/cyberpunk.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>

  	 				<div class="ml-4">
  	 					<a href="#" class="hover:text-gray-300">CyberPunk 2077</a>
  	 					<div class="text-gray-400 text-sm mt-1">Sept 16,2020</div>
  	 				</div>
     	  	 </div>
</div>

 <div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="#">
  	 				<img src="/avengers.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>

  	 				<div class="ml-4">
  	 					<a href="#" class="hover:text-gray-300">Marvel's Avenger</a>
  	 					<div class="text-gray-400 text-sm mt-1">Sept 3,2020</div>
  	 				</div>
     	  	 </div>
</div>
<div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="#">
  	 				<img src="/ghost.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>

  	 				<div class="ml-4">
  	 					<a href="#" class="hover:text-gray-300">Ghost of Tsushima</a>
  	 					<div class="text-gray-400 text-sm mt-1">July 17,2020</div>
  	 				</div>
     	  	 </div>
</div>

<div class="most-anticipated space-y-10 mt-8 ">
     	  	 <div class="game flex">
     	  	 	            <a href="#">
  	 				<img src="/resident.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>

  	 				<div class="ml-4">
  	 					<a href="#" class="hover:text-gray-300">Resident Evil III</a>
  	 					<div class="text-gray-400 text-sm mt-1">July 17,2020</div>
  	 				</div>
     	  	 </div>
</div>

	<h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-8">Coming Soon</h2>
        <div class="coming soon space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="#">
  	 				<img src="/ghost.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>

  	 				<div class="ml-4">
  	 					<a href="#" class="hover:text-gray-300">Ghost of Tsushima</a>
  	 					<div class="text-gray-400 text-sm mt-1">July 17,2020</div>
  	 				</div>
     	  	 </div>
</div>

         <div class="coming soon space-y-10 mt-8 ">
     	  	 <div class="game flex">
     	  	 	            <a href="#">
  	 				<img src="/resident.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>

  	 				<div class="ml-4">
  	 					<a href="#" class="hover:text-gray-300">Resident Evil III</a>
  	 					<div class="text-gray-400 text-sm mt-1">July 17,2020</div>
  	 				</div>
     	  	 </div>
</div>


<div class="coming soon space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="#">
  	 				<img src="/avengers.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>

  	 				<div class="ml-4">
  	 					<a href="#" class="hover:text-gray-300">Marvel's Avenger</a>
  	 					<div class="text-gray-400 text-sm mt-1">Sept 3,2020</div>
  	 				</div>
     	  	 </div>
</div>


 <div class="most-anticipated space-y-10 mt-8">
     	  	 <div class="game flex">
     	  	 	            <a href="#">
  	 				<img src="/cyberpunk.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
  	 				</a>

  	 				<div class="ml-4">
  	 					<a href="#" class="hover:text-gray-300">CyberPunk 2077</a>
  	 					<div class="text-gray-400 text-sm mt-1">Sept 16,2020</div>
  	 				</div>
     	  	 </div>
</div>
     	  </div>


      




     </div>

  </div>  <!-- end conainer -->

@endsection
