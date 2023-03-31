<div id="orderManager">
    <h1><i class="fa-regular fa-list"></i> Order management</h1>
    <div class="button-placeholder">
        <div class="edit-button" onclick="openEditorder()">
            <div class="icon-placeholder"><i class="fa-solid fa-pen-to-square"></i></div>
            <div class="info-placeholder">Edit</div>
        </div>
    </div>
    <div class="title-list">
        <div class="title-placeholder">
            <div class="title" style="padding-right: 10px;">No.</div>
            <div class="title" style="padding-right: 15px;">Order ID</div>
            <div class="title" style="padding-right: 15px;">Account ID</div>
            <div class="title" style="padding-right: 10px;">Date of order</div>
            <div class="title">Total price</div>
            <div class="title">Discount</div>
            <div class="title">Status</div>
            <div class="title"></div>
        </div>
    </div>
    <div class="list">
        <div class="placeholder">
            <div class="info">
                <div class="item">01</div>
                <div class="item">ODR001</div>
                <div class="item">CUS001</div>
                <div class="item">31/3/2023</div>
                <div class="item">1000</div>
                <div class="item">100</div>
                <div class="item">Pending</div>
                <div class="item" onclick="openDetailorder()"><i class="fa-regular fa-circle-info"></i></div>
            </div>
        </div>
    </div>
    <div class="modal-placeholder" id="detail-order">
        <div class="modal-box">
            <div class="modal-header">
                <h1><i class="fa-regular fa-square-kanban fa-rotate-270"></i> Order details</h1>
            </div>
            <div class="modal-left">
                <div class="modal-info">
                    <div class="modal-item">
                        <div class="item-header">Order id</div>
                        <div class="item-input"><input type="text" value="CUS001"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Account id</div>
                        <div class="item-input"><input type="text" value="Bùi Hồng Bảo"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Date of order</div>
                        <div class="item-input"><input type="text" value="buibuibaobao@gmail.com"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Total price</div>
                        <div class="item-input"><input type="text" value="Ho Chi Minh City"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Discount</div>
                        <div class="item-input"><input type="text" value="0900000000"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Status</div>
                        <div class="item-input"><select name="" id="">
                                <option value="P">Pending</option>
                                <option value="S">Shipping</option>
                                <option value="A">Approve</option>
                                <option value="C">Cancel</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-right">
                <div class="title-list">
                    <div class="title-placeholder">
                        <div class="title" style="padding-right: 10px;">No.</div>
                        <div class="title" style="padding-right: 15px;">Album ID</div>
                        <div class="title" style="padding-right: 15px;">Album name</div>
                        <div class="title" style="padding-right: 10px;">Quantity</div>
                        <div class="title" style="padding-right: 10px;">Price</div>
                    </div>
                </div>
                <div class="list">
                    <div class="placeholder">
                        <div class="info">
                            <div class="item">01</div>
                            <div class="item">CUS001</div>
                            <div class="item">Bùi Hồng Bảo</div>
                            <div class="item">2</div>
                            <div class="item>" style="
                            display:flex;
                            justify-content:center;
                            align-items:center;
                            color: var(--gr1)">100</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-button">
                <div class="button-layout"></div>
                <div class="button-layout">
                    <div class="edit-button">
                        <div class="icon-placeholder"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div class="info-placeholder">Edit</div>
                    </div>
                    <div class="back-button" onclick="closeDetailorder()">
                        <div class="icon-placeholder"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="info-placeholder">Back</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-placeholder" id="edit-order">
        <div class="modal-box">
            <div class="modal-header">
                <h1><i class="fa-regular fa-square-kanban fa-rotate-270"></i> Edit order</h1>
            </div>
            <div class="modal-left">
                <div class="modal-info">
                    <div class="modal-item">
                        <div class="item-header">Order id</div>
                        <div class="item-input"><input type="text" value="CUS001"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Account id</div>
                        <div class="item-input"><input type="text" value="Bùi Hồng Bảo"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Date of order</div>
                        <div class="item-input"><input type="text" value="buibuibaobao@gmail.com"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Total price</div>
                        <div class="item-input"><input type="text" value="Ho Chi Minh City"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Discount</div>
                        <div class="item-input"><input type="text" value="0900000000"></div>
                    </div>
                    <div class="modal-item">
                        <div class="item-header">Status</div>
                        <div class="item-input"><select name="" id="">
                                <option value="P">Pending</option>
                                <option value="S">Shipping</option>
                                <option value="A">Approve</option>
                                <option value="C">Cancel</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-right">
                <div class="title-list">
                    <div class="title-placeholder">
                        <div class="title" style="padding-right: 10px;">No.</div>
                        <div class="title" style="padding-right: 15px;">Album ID</div>
                        <div class="title" style="padding-right: 15px;">Album name</div>
                        <div class="title" style="padding-right: 10px;">Quantity</div>
                        <div class="title" style="padding-right: 10px;">Price</div>
                    </div>
                </div>
                <div class="list">
                    <div class="placeholder">
                        <div class="info">
                            <div class="item">01</div>
                            <div class="item">CUS001</div>
                            <div class="item">Bùi Hồng Bảo</div>
                            <div class="item">2</div>
                            <div class="item>" style="
                            display:flex;
                            justify-content:center;
                            align-items:center;
                            color: var(--gr1)">100</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-button">
                <div class="button-layout"></div>
                <div class="button-layout">
                    <div class="edit-button">
                        <div class="icon-placeholder"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div class="info-placeholder">Edit</div>
                    </div>
                    <div class="back-button" onclick="closeEditorder()">
                        <div class="icon-placeholder"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="info-placeholder">Back</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    