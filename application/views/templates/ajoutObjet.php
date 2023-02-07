
<div class="row justify-content-around" >
   <div class="col-5" id="v">   
      <div class="form-floating mb-3" style="margin-top: 10%; padding-bottom: 10%;">
         
         <form  action="#" enctype="multipart/form-data">
            <h2>Ajout objet</h2>
            <div class="input-form">
               <input id="nom" type="text" name="nom" placeholder=" " required="text">
               <label for="nom">Nom</label>
            </div>
            <div class="input-form">
               <input id="nom" type="text" name="description" placeholder=" " required="text">
               <label for="nom">Description</label>
            </div>
            <div class="input-form">
               <input id="nom" type="text" name="prix" placeholder=" " required="text">
               <label for="nom">Prix estimatif</label>
            </div>
            <div class="select-form">   
               <select id="genre">
                  <option>Electronique</option>
                  <option>Vetement</option>
               </select>
               <label for="genre">categorie</label>
            </div>
            <div class="input-form">
               <input id=nom type="file" name="photo">
               <h3>Ajouter photo</h3>
            </div>
            
            <div class="row justify-content-center" id="btnAjout">
               <input type="submit" class="btn btn-primary" value="Ajouter">
            </div>
         </form>
      </div>
   </div>
</div>