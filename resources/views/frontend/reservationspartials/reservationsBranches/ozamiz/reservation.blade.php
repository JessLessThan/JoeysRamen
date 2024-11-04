@extends('frontend.reservationspartials.reservationsBranches.mainreservation')

@section('reservationBranches')
<style>
    .calendar-day {
        cursor: pointer; /* Show pointer cursor on hover */
        transition: background-color 0.3s; /* Smooth background color transition */
    }

    .calendar-day:hover {
        background-color: #dc3545; /* Bootstrap danger color */
        color: white; /* White text on hover */
    }

    .selected-day {
        background-color: #dc3545; /* Bootstrap danger color */
        color: white; /* Text color for contrast */
    }

    .disabled-day {
        background-color: #f8d7da; /* Light red background */
        color: #6c757d; /* Gray text */
        pointer-events: none; /* Disable pointer events */
    }

    .clickable-card {
        cursor: pointer; /* Change the cursor to pointer */
    }
</style>


           
            <h2 class="fw-bold fs-1 mt-3">Joeys Ramen <span class="text-danger fw-bold">House</span> - Ozamiz</h2>
            <div class="col-lg-3 border-black mx-4 position-relative mt-4 border rounded-2">
                <!-- Trigger for Calendar Modal -->
                <button id="dateButton" type="button" class="btn form-control text-dark select-black d-flex justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#calendarModal">
                    <span id="selectedDateText"></span> <!-- Button text -->
                    <i class="fa-solid fa-calendar-day ms-2"></i> <!-- Calendar icon on the right -->
                </button>
            </div>


            <div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="calendarModalLabel">Select a Date</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center mb-3">
                                <button id="prevMonth" class="btn btn-secondary btn-sm">‹</button>
                                <span id="currentMonthYear" class="mx-2"></span>
                                <button id="nextMonth" class="btn btn-secondary btn-sm">›</button>
                            </div>
                            <!-- Simple Calendar Example -->
                            <table class="table table-bordered text-center" id="calendarTable">
                                <thead>
                                    <tr>
                                        <th>Sun</th>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed</th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                    </tr>
                                </thead>
                                <tbody id="calendarBody">
                                    <!-- Dates will be dynamically generated here -->
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Select</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>

            <div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered"> <!-- Added modal-dialog-centered class -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reservationModalLabel">Table Reservation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-start">
                            <form id="reservationForm">
                                <div class="mb-3">
                                    <label for="numberOfPersons" class="form-label">Number of Persons</label>
                                    <input type="number" class="form-control" id="numberOfPersons" required>
                                </div>
                                <div class="mb-3">
                                    <label for="reservationDate" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="reservationDate" required>
                                </div>
                                <div class="mb-3">
                                    <label for="reservationTime" class="form-label">Time</label>
                                    <input type="time" class="form-control" id="reservationTime" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="reservationForm" class="btn btn-success">Pre-order</button>
                        </div>
                    </div>
                </div>
            </div>

            

            

            <div class="mt-lg-5">
               <div class="row">
                <div class="col-lg-3 mb-lg-4 border-success rounded-2 col-md-4 col-sm-6 border d-flex justify-content-center align-items-center clickable-card" style="width: 80%; max-width: 300px; margin: auto;" data-bs-toggle="modal" data-bs-target="#reservationModal">
                    <div class="row py-2 text-center" style="width: 100%;">
                        <div class="col-4 d-flex flex-column align-items-center">
                            <div class="bg-black" style="height: 80px; width: 80px;"></div>
                            <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center">
                            <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                <h4 style="color: white; font-size: 14px; margin: 0;">Table 1</h4>
                            </div>
                        </div>
                        <div class="col-4 d-flex flex-column align-items-center">
                            <div class="bg-black" style="height: 80px; width: 80px;"></div>
                            <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 d-flex justify-content-center  mb-lg-3 align-items-center">
                    <img src="{{ asset('img/Reservation/icons/icon.png') }}" alt="">
                </div>
                
                   
                    <div class="col-lg-3 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <div class="row py-2 text-center" style="width: 100%;">
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                    <h4 style="color: white; font-size: 14px; margin: 0;">Table 2</h4>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <div class="row py-2 text-center" style="width: 100%;">
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                    <h4 style="color: white; font-size: 14px; margin: 0;">Table 3</h4>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4  mb-lg-4 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/Reservation/icons/icon.png') }}" alt="">
                    </div>
                    <div class="col-lg-3 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <div class="row py-2 text-center" style="width: 100%;">
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                    <h4 style="color: white; font-size: 14px; margin: 0;">Table 4</h4>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <div class="row py-2 text-center" style="width: 100%;">
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                    <h4 style="color: white; font-size: 14px; margin: 0;">Table 5</h4>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  mb-lg-4  d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/Reservation/icons/icon.png') }}" alt="">
                    </div>

                    <div class="col-lg-3 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <div class="row py-2 text-center" style="width: 100%;">
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                    <h4 style="color: white; font-size: 14px; margin: 0;">Table 6</h4>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-lg-4 border-success rounded-2  col-md-4 col-sm-6 border d-flex justify-content-center align-items-center" style="width: 80%; max-width: 300px; margin: auto;">
                        <div class="row py-2 text-center" style="width: 100%;">
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black h-100 rounded-3" style="height: 180px; width: 80px; display: flex; align-items: center; justify-content: center;">
                                    <h4 style="color: white; font-size: 14px; margin: 0;">Table 6</h4>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column align-items-center">
                                <div class="bg-black" style="height: 80px; width: 80px;"></div>
                                <div class="bg-black mt-1" style="height: 80px; width: 80px;"></div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-8  border-success rounded-2  col-md-4 col-sm-6 border ">
                        <div class="row pt-4">
                            <div class="col-lg-2 d-flex mb-lg-2 pt-lg-3 flex-column align-items-center">
                                <div class="bg-black" style="height: 85px; width: 100px;"></div>
                            </div>
                            <div class="col-lg-2 d-flex mb-lg-2 pt-lg-3 flex-column align-items-center">
                                <div class="bg-black" style="height: 85px; width: 100px;"></div>
                            </div>
                            <div class="col-lg-2 d-flex mb-lg-2 pt-lg-3 flex-column align-items-center">
                                <div class="bg-black" style="height: 85px; width: 100px;"></div>
                            </div>
                            <div class="col-lg-2 d-flex mb-lg-2 pt-lg-3 flex-column align-items-center">
                                <div class="bg-black" style="height: 85px; width: 100px;"></div>
                            </div>
                            <div class="col-lg-2 d-flex mb-lg-2 pt-lg-3 flex-column align-items-center">
                                <div class="bg-black" style="height: 85px; width: 100px;"></div>
                            </div>
                            <div class="col-lg-2 d-flex flex-column  align-items-center mb-0"> <!-- Set margin bottom to 0 for this column -->
                                <div class="bg-black rounded-top"  style="height: 120px; width: 100px;"></div>
                            </div>
                        
                            <div class="col-lg-12 pb-3 d-flex flex-column align-items-center">
                                <div class="bg-black  rounded-start rounded-bottom" style="height: 90px; max-width: 799px; width: 100%;"></div>
                            </div>
                        </div>
                        
                        
                    </div>
               </div>
            </div>
            

              

<script>
    let currentDate = new Date();
    let selectedDay = currentDate.getDate(); // Default to today's date
    let selectedMonth = currentDate.getMonth();
    let selectedYear = currentDate.getFullYear();

    // Function to update the displayed date on the button
    function updateSelectedDateText() {
        const selectedDateText = `${selectedDay} ${currentDate.toLocaleString('default', { month: 'long' })} ${selectedYear}`;
        document.getElementById('selectedDateText').textContent = selectedDateText;
    }

    function updateCalendar() {
        const month = currentDate.getMonth();
        const year = currentDate.getFullYear();
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const daysInMonth = lastDay.getDate();
        const startingDay = firstDay.getDay();

        const monthYearDisplay = document.getElementById('currentMonthYear');
        monthYearDisplay.textContent = `${firstDay.toLocaleString('default', { month: 'long' })} ${year}`;

        const calendarBody = document.getElementById('calendarBody');
        calendarBody.innerHTML = ''; // Clear previous days

        // Create empty cells for days of the week before the first day
        let row = '<tr>';
        for (let i = 0; i < startingDay; i++) {
            row += '<td></td>'; // Empty cells
        }

        // Fill in the days of the month
        for (let day = 1; day <= daysInMonth; day++) {
            const currentCellDate = new Date(year, month, day);
            const isPastDate = currentCellDate < new Date(); // Check if the date is in the past

            if (isPastDate) {
                row += `<td class="calendar-day disabled-day">${day}</td>`;
            } else {
                row += `<td class="calendar-day" data-day="${day}">${day}</td>`;
            }

            if ((day + startingDay) % 7 === 0) {
                row += '</tr><tr>'; // New row after 7 days
            }
        }
        row += '</tr>';
        calendarBody.innerHTML = row;

        // Highlight the previously selected day if it exists
        if (selectedDay) {
            const previousSelectedDay = calendarBody.querySelector(`.calendar-day[data-day="${selectedDay}"]`);
            if (previousSelectedDay) {
                previousSelectedDay.classList.add('selected-day');
            }
        }

        // Add click event to each calendar day
        document.querySelectorAll('.calendar-day:not(.disabled-day)').forEach(function(dayElement) {
            dayElement.addEventListener('click', function() {
                // Reset previous selected day if any
                const previouslySelectedDay = calendarBody.querySelector('.selected-day');
                if (previouslySelectedDay) {
                    previouslySelectedDay.classList.remove('selected-day');
                }

                // Set the new selected day
                selectedDay = this.dataset.day; // Save the selected day number
                this.classList.add('selected-day'); // Highlight the selected day

                // Update button text with selected date
                updateSelectedDateText(); // Call the function to update button text

                // Dismiss the modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('calendarModal'));
                modal.hide();
            });
        });
    }

    // Navigation functions
    document.getElementById('prevMonth').addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        updateCalendar();
    });

    document.getElementById('nextMonth').addEventListener('click', function() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        updateCalendar();
    });

    // Show modal event listener
    document.getElementById('calendarModal').addEventListener('show.bs.modal', function () {
        updateCalendar(); // Update calendar when modal is opened
    });

    // Initial button text display
    updateSelectedDateText(); // Set the initial button text to today's date
    // Initial calendar render
    updateCalendar();
</script>

@endsection
    