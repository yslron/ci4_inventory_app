<div class="wrapper">


    <!-- Page content -->
    <!-- Header Content -->
    <div class="d-flex header-content d-flex p-3 container-fluid align-items-center justify-content-between flex-wrap">
        <h1 class="bold">Inventory</h1>

       

        <div class="prod">
            <button type="button" data-toggle="modal" data-target="#formModal">
                <h4 class="text-nowrap"><i class="fas fa-plus-circle"></i>Add Product</h4>
            </button>
        </div>
    </div>
    <!-- Table -->


    <div id="table-wrapper ">
        <div id="table-scroll">
            <div class="tbl ml-1">
                <table id="example" class="table text-left ss-container table-hover table-borderless ">
                    <thead id="content-1" class=" thead-text table-bordered border-bottom align-middle">
                        <tr class="">
                            <th class="bg-white col" scope="col">#</th>
                            <th class="bg-white col-1" scope="col">UID</th>
                            <th class="bg-white col" scope="col"></th>
                            <th class="bg-white col" scope="col">Name</th>
                            <th class="bg-white col" scope="col">Manufacturer</th>
                            <th class="bg-white col-3" scope="col">Description</th>
                            <th class="bg-white" scope="col">Unit Price</th>
                            <th class="bg-white" scope="col">Stock</th>
                            <th class="bg-white" scope="col">Status</th>
                        </tr>
                    </thead>
                 
                    <tbody class="tbody-text">
                        <?php
                        foreach($invdata as $id){
                        ?>
                        <tr class="align-middle ">
                            <th scope="row">

                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            </th>
                            <td class="no-wrap"><?php echo $id['UID']; ?></td>
                            <td>
                                <div class=table-img-cont>
                                    <img src="" alt="">
                                </div>
                            </td>
                            <td><?php echo $id['name']; ?></td>
                            <td><?php echo $id['manufacturer']; ?></td>
                            <td><?php echo $id['description']; ?></td>
                            <td><?php echo $id['unitPrice']; ?></td>
                            <td><?php echo $id['stock']; ?></td>
                            <td id="statusGet" class=""><?php echo $id['availability']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>    
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- button area -->
    <hr class="style-two">
    <div class="container-fluid btn-area">
        <div class="btn-cluster"></div>
        <button type="button" class="edit-btn">Edit</button>
        <button type="button" class="delete-btn">Delete</button>
    </div>
    
 

    <!-- Modal -->
    
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Form</h5>
            <button type="button" class="btn-close " data-dismiss="modal">
                        
            </button>
        </div>
      <div class="modal-body">
            <!-- modal form -->
            <form action="<?php echo site_url('app/store');?>" method="post">
                <div class="row">
                    <div class="form-group col">
                    <label for="name">Name</label>
                    <input name="dname" type="name" class="form-control"          placeholder="Product Name">
                    </div>

                    <div class="form-group col">
                    <label for="manufacturer">Manufacturer</label>
                    <input name="dmanufacturer" type="text" class="form-control" id="inputPassword4" placeholder="Manufacturer Name">
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col mt-2 mb-2">
                    <label for="description">Description</label>
                    <textarea name="ddescription" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="form-group col">
                    <label for="unitPrice">Unit Price</label>
                    <input name="dunitPrice" type="text" class="form-control" id="inputEmail4" placeholder="">
                    </div>
                    <div class="form-group col">
                    <label for="stock">Stock</label>
                    <input name="dstock" type="stock" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                    <div class="form-group col">
                    <label for="availability">Status</label>
                    <select name="davailability" id="selection" onchange="changeFunc()" class="form-select text-primaryv2">
                        <option class="text-primaryv2" value="Available" selected>Available</option>
                        <option class="text-danger" value="Unavailable" >Unavailable</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                <label for="inputPhoto">Insert Photo</label>
                    <div class="form-group col mt-2 mb-2">
                        <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input  type="file" accept=".jpg,.gif,.png" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                </div>
                <!-- modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                
            </form>
          

        </div>
       
        </div>
    </div>

</div>

</div>



</div>