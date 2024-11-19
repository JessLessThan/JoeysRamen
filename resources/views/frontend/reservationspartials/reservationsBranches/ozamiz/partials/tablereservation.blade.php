@extends('frontend.reservationspartials.reservationsBranches.mainreservation')

@section('reservationBranches')
<div class="modal-body text-start">
    <div class="d-flex justify-content-end">
        <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left mx-1"></i>Back</a>
    </div>    
   
    <form id="reservationForm" action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <!-- Check if it's an Ozamiz reservation -->
        @if($isOzamiz)
            <h2 class="text-center">Table {{ $ozamizTable->table }} (Ozamiz)</h2>
            
            <input type="hidden" name="table_id" value="{{ $ozamizTable->id }}">
            <input type="hidden" name="table_number" value="{{ $ozamizTable->table }}">
            <input type="hidden" name="location" value="ozamiz">
        @else
            <h2 class="text-center">Table {{ $pagadianTable->table }} (Pagadian)</h2>
            <input type="hidden" name="table_id" value="{{ $pagadianTable->id }}">
            <input type="hidden" name="table_number" value="{{ $pagadianTable->table }}">
            <input type="hidden" name="location" value="pagadian">
        @endif
    
        <div class="mb-3">
            <label for="numberOfPersons" class="form-label">Number of Persons</label>
            <input 
                type="number" 
                class="form-control" 
                id="numberOfPersons" 
                name="number_of_persons" 
                required 
                min="1" 
                max="{{ $isOzamiz ? $ozamizTable->table_capacity : $pagadianTable->table_capacity }}" 
                placeholder="Max {{ $isOzamiz ? $ozamizTable->table_capacity : $pagadianTable->table_capacity }} Capacity"
                value="{{old('number_of_persons')}}"
            >

            @if ($errors->get('number_of_persons'))
                              <div class="text-danger mt-2">{{ $errors->first('number_of_persons') }}</div>
            @endif
        </div>
    
        <div class="mb-3">
            <label for="reservationDate" class="form-label">Date</label>
            <input 
                type="date" 
                class="form-control" 
                id="reservationDate" 
                name="reservation_date" 
                required 
                min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                value="{{old('reservation_date')}}"
            >
    
            @if ($errors->get('reservation_date'))
            <div class="text-danger mt-2">{{ $errors->first('reservation_date') }}</div>
            @endif
        </div>
    
        <div class="mb-3">
            <label for="reservationTime" class="form-label">Time</label>
            <select id="reservationTime" name="reservation_time" class="form-control w-100" required>
                <option value="" disabled {{ old('reservation_time') ? '' : 'selected' }}>Select a time slot</option>
                <option value="8:00 - 9:00 AM" {{ old('reservation_time') == "8:00 - 9:00 AM" ? 'selected' : '' }}>
                    8:00 - 9:00 AM (0/1)
                </option>
                <option value="9:00 - 10:00 AM" {{ old('reservation_time') == "9:00 - 10:00 AM" ? 'selected' : '' }}>
                    9:00 - 10:00 AM (0/1)
                </option>
                <option value="10:00 - 11:00 AM" {{ old('reservation_time') == "10:00 - 11:00 AM" ? 'selected' : '' }}>
                    10:00 - 11:00 AM (0/1)
                </option>
                <option value="11:00 - 12:00 PM" {{ old('reservation_time') == "11:00 - 12:00 PM" ? 'selected' : '' }}>
                    11:00 - 12:00 PM (0/1)
                </option>
                <option value="12:00 - 01:00 PM" {{ old('reservation_time') == "12:00 - 01:00 PM" ? 'selected' : '' }}>
                    12:00 - 01:00 PM (0/1)
                </option>
                <option value="01:00 - 02:00 PM" {{ old('reservation_time') == "01:00 - 02:00 PM" ? 'selected' : '' }}>
                    01:00 - 02:00 PM (0/1)
                </option>
                <option value="02:00 - 03:00 PM" {{ old('reservation_time') == "02:00 - 03:00 PM" ? 'selected' : '' }}>
                    02:00 - 03:00 PM (0/1)
                </option>
                <option value="03:00 - 04:00 PM" {{ old('reservation_time') == "03:00 - 04:00 PM" ? 'selected' : '' }}>
                    03:00 - 04:00 PM (0/1)
                </option>
                <option value="04:00 - 05:00 PM" {{ old('reservation_time') == "04:00 - 05:00 PM" ? 'selected' : '' }}>
                    04:00 - 05:00 PM (0/1)
                </option>
                <option value="05:00 - 06:00 PM" {{ old('reservation_time') == "05:00 - 06:00 PM" ? 'selected' : '' }}>
                    05:00 - 06:00 PM (0/1)
                </option>
                <option value="06:00 - 07:00 PM" {{ old('reservation_time') == "06:00 - 07:00 PM" ? 'selected' : '' }}>
                    06:00 - 07:00 PM (0/1)
                </option>
                <option value="07:00 - 08:30 PM" {{ old('reservation_time') == "07:00 - 08:30 PM" ? 'selected' : '' }}>
                    07:00 - 08:30 PM (0/1)
                </option>
            </select>
        </div>
        


            @if ($errors->get('reservation_time'))
            <div class="text-danger mt-2">{{ $errors->first('reservation_time') }}</div>
            @endif
            
        </div>
    
        <div class="mb-3 text-start">
            <label for="description" class="form-label">Description (Optional)</label>
            <textarea 
                class="form-control" 
                id="description" 
                name="description" 
                rows="3"></textarea>
        </div>
        
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

        <div class="modal-footer">
            <button type="submit" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Reserve Table</button>
            <button type="" form="reservationForm" class="btn btn-success">Pre-order</button>
        </div>
    </form>    
</div>


@endsection