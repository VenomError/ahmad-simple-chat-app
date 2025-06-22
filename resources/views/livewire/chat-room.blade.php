<div class="container my-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Live Chat</h5>
        </div>
        <div class="card-body" style="max-height: 300px; overflow-y: auto;" wire:poll>
            @forelse ($messages as $msg)
                <div class="mb-3">
                    <strong class="text-primary">{{ $msg->name }}</strong>
                    <p class="mb-1">{{ $msg->message }}</p>
                    <small class="text-muted">{{ $msg->created_at->diffForHumans() }}</small>
                    <hr>
                </div>
            @empty
                <p class="text-muted">No messages yet.</p>
            @endforelse
        </div>
        <div class="card-footer">
            <div class="mb-2">
                <input type="text" class="form-control" wire:model.defer="username" placeholder="Enter your name">
            </div>
            <div class="mb-2">
                <textarea class="form-control" rows="3" wire:model.defer="message" placeholder="Type your message"></textarea>
            </div>
            <button class="btn btn-primary w-100" wire:click="sendMessage">Send</button>
        </div>
    </div>
</div>
